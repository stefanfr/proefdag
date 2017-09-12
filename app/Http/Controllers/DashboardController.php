<?php

namespace App\Http\Controllers;

use App\ProductInformation;
use App\SaleProducts;
use App\SalesInformation;
use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\JsonResponse;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $products = ProductInformation::all();

        foreach ($products as $product) {
            $soldAmount = 0;
            foreach ($product->SaleProducts as $saleProduct) {
                $soldAmount += $saleProduct->amount;
            }

            $price = 0;
            $i = 0;
            foreach ($product->PurchaseInformation as $information) {
                $price += $information->price;
                $i++;
            }
            $data[$product->id] = ['soldAmount' => $soldAmount, 'buyInPrice' => ($i > 0 ? $price / $i : 0)];
        }
        return view('dashboard', ['products' => $products, 'data' => $data]);
    }

    public function jsonGenerate()
    {
        $data = array();
        $sale_products = array();

        for ($i = 0; $i < 800; $i++) {
            array_push($sale_products, [
                'product_information_id' => rand(0, 200),
                'sales_information_id' => rand(0, 200),
                'amount' => rand(0, 80)
            ]);
        }

        DB::table('sale_products')->insert($sale_products);

        array_push($data, ['sale_products' => $sale_products]);

        return new JsonResponse($data);
    }


    public function getAdditionalInformation(ProductInformation $productInformationId)
    {
        $data = [
            'nutritional_value' => $productInformationId->ProductNutritionalValue,
            'segments_value' => $productInformationId->ProductSegmentsValue,
        ];
        $view = View::make('additionalInformation', ['nutritional_value' => $productInformationId->ProductNutritionalValue, 'segments_value' => $productInformationId->ProductSegmentsValue]);
        $contents = $view->render();
        $contents = (string)$view;
        return $contents;
    }
}
