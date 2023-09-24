<?php

namespace App\Controller;

use Pimcore\Model\DataObject\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController  extends ApiBaseController
{
    /**
     * @Route("/v1/products")
     */
    public function defaultAction(Request $request): Response
    {
        $products = new Products\Listing();
        foreach ($products as $key => $product) {
            $data[] = array(
                "title" => $product->getName(),
                "description" => $product->getDescription(),
                "price" => $product->getPrice(),
                "image_url" => $product->getImage()->getFullPath(),
                "properties" => json_encode($product->jsonSerialize()));
        }
        $this->setCode("200");
        $this->setMessage("success");
        $this->setStatus(true);
        $this->setData($data);
        return $this->getReturn();
    }
}