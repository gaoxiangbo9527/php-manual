<?php

class parentClass
{
    public $pub = 'publicParent';
    protected $prot = 'protectedParent';
    private $priv = 'privateParent';
    public $pub_bar = null;
    protected $prot_bar = null;
    private $priv_bar = null;

    public function __construct()
    {
        $this->pub_bar = new childClass();
        $this->prot_bar = new childClass();
        $this->priv_bar = new childClass();
    }
}

class childClass
{
    public $pub = 'publicChild';
    protected $prot = 'protectedChild';
    private $priv = 'privateChild';
}

$parent = new parentClass();

echo http_build_query($parent);
