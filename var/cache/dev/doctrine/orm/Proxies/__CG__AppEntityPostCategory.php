<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PostCategory extends \App\Entity\PostCategory implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
  'category_name' => NULL,
  'parent' => NULL,
  'description' => NULL,
  'status' => NULL,
  'created' => NULL,
  'updated' => NULL,
  'postCategories' => NULL,
  'posts' => NULL,
  'products' => NULL,
  'CategoryThumbnail' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'category_name' => NULL,
  'parent' => NULL,
  'description' => NULL,
  'status' => NULL,
  'created' => NULL,
  'updated' => NULL,
  'postCategories' => NULL,
  'posts' => NULL,
  'products' => NULL,
  'CategoryThumbnail' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->category_name, $this->parent, $this->description, $this->status, $this->created, $this->updated, $this->postCategories, $this->posts, $this->products, $this->CategoryThumbnail);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'category_name', 'parent', 'description', 'status', 'created', 'updated', 'postCategories', 'posts', 'products', 'CategoryThumbnail', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableFlavours', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableShapes', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableTypes'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableFlavours', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableShapes', '' . "\0" . 'App\\Entity\\PostCategory' . "\0" . 'AvailableTypes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PostCategory $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->category_name, $this->parent, $this->description, $this->status, $this->created, $this->updated, $this->postCategories, $this->posts, $this->products, $this->CategoryThumbnail);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryName', []);

        return parent::getCategoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryName(string $category_name): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryName', [$category_name]);

        return parent::setCategoryName($category_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(bool $status): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated(\DateTimeInterface $created): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(\DateTimeInterface $updated): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId(): ?\App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', []);

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentId(?\App\Entity\PostCategory $parent_id): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentId', [$parent_id]);

        return parent::setParentId($parent_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostCategories', []);

        return parent::getPostCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addPostCategory(\App\Entity\PostCategory $postCategory): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPostCategory', [$postCategory]);

        return parent::addPostCategory($postCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function removePostCategory(\App\Entity\PostCategory $postCategory): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePostCategory', [$postCategory]);

        return parent::removePostCategory($postCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosts', []);

        return parent::getPosts();
    }

    /**
     * {@inheritDoc}
     */
    public function addPost(\App\Entity\Post $post): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPost', [$post]);

        return parent::addPost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function removePost(\App\Entity\Post $post): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePost', [$post]);

        return parent::removePost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent(): ?\App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?\App\Entity\PostCategory $parent): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedValue', []);

        return parent::setCreatedValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedValue', []);

        return parent::setUpdatedValue();
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduct(\App\Entity\Product $product): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduct', [$product]);

        return parent::addProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduct(\App\Entity\Product $product): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduct', [$product]);

        return parent::removeProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoryThumbnail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoryThumbnail', []);

        return parent::getCategoryThumbnail();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoryThumbnail(?string $CategoryThumbnail): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoryThumbnail', [$CategoryThumbnail]);

        return parent::setCategoryThumbnail($CategoryThumbnail);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFlavours(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableFlavours', []);

        return parent::getAvailableFlavours();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableFlavours(?string $AvailableFlavours): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableFlavours', [$AvailableFlavours]);

        return parent::setAvailableFlavours($AvailableFlavours);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableShapes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableShapes', []);

        return parent::getAvailableShapes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableShapes(?string $AvailableShapes): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableShapes', [$AvailableShapes]);

        return parent::setAvailableShapes($AvailableShapes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableTypes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableTypes', []);

        return parent::getAvailableTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableTypes(?string $AvailableTypes): \App\Entity\PostCategory
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableTypes', [$AvailableTypes]);

        return parent::setAvailableTypes($AvailableTypes);
    }

}
