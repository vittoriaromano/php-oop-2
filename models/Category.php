<?php
class Category
{
    private $name;
    private $icon;
    
    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
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

    /**
     * Get icon
     * product's name
     * 
     * @return string
     */
    public function get_icon(){
        return $this->icon;
    }
    /**
     * Set icon
     * product's name
     * 
     * @return string
     */
    public function set_icon($_icon){
        $this->icon = $_icon;
    }

    /**
     * Get category
     * Pet category 
     * 
     * @return string
     */
    public function get_category_info(){
        return "{$this->icon} {$this->name}";
    }
    
}
?>