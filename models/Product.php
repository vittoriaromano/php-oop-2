<?php
/**
 * Product
 * Definition of the defoult product
 * @author Vittoria Romano
 */
class Product
{
    private $id;
    private $name;
    private $description;
    private $category;
    private $price;
    private $img;
    //private $icon;

    /**
     *  __construct
     * 
     * @param int $_id
     * @param string $_name
     * @param string $_description
     * @param string $_category
     * @param float $_price
     * @param string $_img
     */
    public function __construct($_id, $_name, $_description, $_category, $_price, $_img)
    {
       $this->id = $_id;
       $this->name = $_name;
       $this->description = $_description;
       $this->category = $_category;
       $this->price = $_price;
       $this->img = $_img;
    }

    /**
     * Get id
     * product's identifier
     * 
     * @return int
     */
    public function get_id(){
        return $this->id;
    }
    /**
     * Set id
     * product's identifier
     * 
     * @return int
     */
    public function set_id($_id){
        $this->id = $_id;
    }
  
    /**
     * Get name
     * product's name
     * 
     * @return string
     */
    public function get_name(){
        return $this->name;
    }
    /**
     * Set name
     * product's name
     * 
     * @return string
     */
    public function set_name($_name){
        $this->name = $_name;
    }

    //desc
    /**
     * Get desc
     * product's description
     * 
     * @return string
     */
    public function get_description(){
        return $this->description;
    }
    /**
     * Set desc
     * product's description
     * 
     * @return string
     */
    public function set_description($_description){
        $this->description = $_description;
    }

    /**
     * Get category
     * Pet category 
     * 
     * @return string
     */
    public function get_category(){
        return $this->category;
    }
    /**
     * Set category
     * Pet category 
     * 
     * @return string
     */
    public function set_category($_category){
        $this->category = $_category;
    }
    /**
     * Get category
     * Pet category 
     * 
     * @return string
     */
    // public function get_category_info(){
    //     return "{$this->icon} {$this->name}";
    // }
    
    /**
     * Get price
     * price 
     * 
     * @return float
     */
    public function get_price(){
        return $this->price;
    }
    /**
     * Get price formatted
     * price in euro
     * 
     * @return float
     */
     public function get_price_formatted(){
         return "{$this->price} €";
     }
    /**
     * Set price
     * price in euro
     * 
     * @return float
     */
    public function set_price($_price){
        $this->price = $_price;
    }
    
    /**
     * Get img
     * picture's link
     * 
     * @return string
     */
    public function get_img(){
        return $this->img;
    }
    /**
     * Set img
     * picture's link
     * 
     * @return string
     */
    public function set_img($_img){
        $this->img = $_img;
    }
}

?>