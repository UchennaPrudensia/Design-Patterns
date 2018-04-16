<?php

//include "ShopProduct.php";

// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });


class ShopProduct{
const AVAILABLE = 0;
const OUT_OF_STOCK = 1;


private $id = 0;

//added code starts here
private   $title;
private   $producerMainName;
private   $producerFirstName;
protected $price;
private   $discount = 0;
public function __construct(
    string $title,
    string $firstName,
    string $mainName,
    float  $price
) {
    $this->title             = $title;
    $this->producerFirstName = $firstName;
    $this->producerMainName  = $mainName;
    $this->price             = $price;
}
public function getProducerFirstName()
{
    return $this->producerFirstName;
}
public function getProducerMainName()
{
    return $this->producerMainName;
}
public function setDiscount($num)
{
    $this->discount = $num;
}
public function getDiscount()
{
    return $this->discount;
}
public function getTitle()
{
    return $this->title;
}
public function getPrice()
{
    return ($this->price - $this->discount);
}
public function getProducer()
{

    return $this->producerFirstName . " " . $this->producerMainName;
}
public function getSummaryLine()
{
    $base  = "{$this->title} ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    return $base;
}
//added code ends here

public function setID(int $id){
  $this->id = $id;
}

public static function getInstance(int $id, PDO $pdo){
  $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ? ");
  $stmt->execute([$id]);
  $row  = $stmt->fetch();
    if(empty($row))
    {
      return null;
    }

  switch($type = $row['type'])
   {
     case "book":
       $product = new BookProduct(
       $row['title'],
       $row['firstname'],
       $row['lastname'],
       (float)$row['price'],
       (int)$row['numPages']);
       break;

     case  "cd":
       $product = new CDProduct(
       $row['title'],
       $row['firstname'],
       $row['lastname'],
       (float)$row['price'],
       (int)$row['playLength']);
       break;

     default :
       $firstname = is_null(row['firstname']? " " : row['firstname']);
       $product = new ShopProduct(
       $row['title'],
       $firstname,
       $row['lastname'],
       (float)$row['price']);
    }


  // if($row["type"] == "book"){
  //   $product = new BookProduct(
  //     $row['title'],
  //     $row['firstname'],
  //     $row['lastname'],
  //     (float)$row['price'],
  //     (int)$row['numPages']
  //   );
  // }
  // else if($row["type"] == "cd"){
  //   $product = new CDProduct(
  //     $row['title'],
  //     $row['firstname'],
  //     $row['lastname'],
  //     (float)$row['price'],
  //     (int)$row['playLength']
  //   );
  // }
  // else{
  //   $firstname = is_null(row['firstname']? " " : row['firstname']);
  //   $product = new ShopProduct(
  //     $row['title'],
  //     $firstname,
  //     $row['lastname'],
  //     (float)$row['price']
  //
  //   );
  // }


  $product->setID((int) $row['id']);
  //$product->setDiscount((int) $row['discount']);
  return $product;

}

}

//added class cd product class starts here;
class CdProduct extends ShopProduct
{
    private $playLength;
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float  $price,
        int    $playLength
    ) {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->playLength = $playLength;
    }
    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function getSummaryLine()
    {
        $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time - {$this->playLength}";
        return $base;
    }
}
//added class cd product class ends here;


//added class book product class starts here;

class BookProduct extends ShopProduct
{
    private $numPages;
    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float  $price,
        int    $numPages
    ) {
        parent::__construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }
    public function getNumberOfPages()
    {
        return $this->numPages;
    }
    public function getSummaryLine()
    {
        $base  = parent::getSummaryLine();
        $base .= ": page count - $this->numPages";
        return $base;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

//added class book product class ends here;










try
  {
  $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8mb4', 'web', 'myschoolproject');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  //echo "connected";
  $product1 = ShopProduct::getInstance(2, $db);
  //$product2 = ShopProduct::getInstance(1, $db);


  echo $product1->getTitle() . "</br>";
  echo $product1->getProducerFirstName() . "</br>";
  echo $product1->getProducerMainName() . "</br>";

  echo $product1->getSummaryLine();

  //echo var_dump($product1);

  }

catch(PDOException $ex)
    {
      echo "Error: " . $ex->getMessage();
    }




 ?>
