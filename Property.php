<?php 
 
class Property implements arrayaccess {
	
	 protected $data = array(); 

   public function offsetExists($index) 
   {
    	  return isset($this->data[$index]);     
   }
 
   public function offsetGet($index)
   {
        return $this->__get($index);
        
   }
 
   public function offsetSet($index, $value) 
   {
        $this->__set($index, $value); 
   }
 
    public function offsetUnset($index) {
        unset($this->data[$index]);
        return true;
    } 
  
    public function get($name, $default = null)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return $default;
    }
    
    public function __get($name)
    {
        return $this->get($name);
    }
    public function __set($name, $value)
    {   

        if (is_array($value)) 
        {
            $value = new self($value, true);
        }
        
        if ($name === null) 
        {
            $this->data[] = $value;
        } 
        else 
        {
            $this->data[$name] = $value;
        }
      
    }
	  public function setName($value) 
	  {	
		   $this->name = $value;						
	  }
	
	  public function getZip() 
	  {				
		   return $this->zip;	
	  }
	
	  public function setZip($value) 
	  {		
		  $this->zip = $value;				
	  }
	
	  public function getAddressSecondary() 
	  {		
		  return $this->address_secondary;		
	  }


} 

 
?>