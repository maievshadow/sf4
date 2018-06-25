<?php
namespace App\Controller;
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/25
 * Time: 下午9:38
 */

use App\Entity\Activity;
use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
//        $product->setDescription('Ergonomic and stylish!');

        // relates this product to the category
        $product->setCategory($category);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Category::class);
        $category = $repo->findByExampleField($id);

        $products = [];

        foreach($category as $val){
            //???
            array_push($products, $val->getProducts());
        }

        return new JsonResponse($products);
    }
}