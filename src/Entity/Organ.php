<?phpnamespace App\Entity;class Organ{    private $id;    private $name;    private $age;    private $price;// etc.    public function setName(string $name)    {        $this->name = $name;    }    public function getName()    {        return $this->name;    }    public function setId(string $id)    {        $this->id = $id;    }    public function getId()    {        return $this->id;    }    public function setPrice(string $price)    {        $this->price = $price;    }    public function getPrice()    {        return $this->price;    }    public function setAge(string $age)    {        $this->age = $age;    }    public function getAge()    {        return $this->age;    }// etc.}