<?php

namespace ContainerGUxTCRQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder91395 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf02f9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4bf8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getConnection', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getMetadataFactory', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getExpressionBuilder', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'beginTransaction', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getCache', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'transactional', array('func' => $func), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->transactional($func);
    }

    public function commit()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'commit', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->commit();
    }

    public function rollback()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'rollback', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getClassMetadata', array('className' => $className), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'createQuery', array('dql' => $dql), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'createNamedQuery', array('name' => $name), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'createQueryBuilder', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'flush', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'clear', array('entityName' => $entityName), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->clear($entityName);
    }

    public function close()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'close', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->close();
    }

    public function persist($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'persist', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'remove', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'refresh', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'detach', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'merge', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'contains', array('entity' => $entity), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getEventManager', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getConfiguration', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'isOpen', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getUnitOfWork', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getProxyFactory', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'initializeObject', array('obj' => $obj), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'getFilters', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'isFiltersStateClean', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'hasFilters', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return $this->valueHolder91395->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf02f9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder91395) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder91395 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder91395->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__get', ['name' => $name], $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        if (isset(self::$publicPropertiesd4bf8[$name])) {
            return $this->valueHolder91395->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91395;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91395;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91395;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder91395;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__isset', array('name' => $name), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91395;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder91395;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__unset', array('name' => $name), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder91395;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder91395;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__clone', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        $this->valueHolder91395 = clone $this->valueHolder91395;
    }

    public function __sleep()
    {
        $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, '__sleep', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;

        return array('valueHolder91395');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf02f9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf02f9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf02f9 && ($this->initializerf02f9->__invoke($valueHolder91395, $this, 'initializeProxy', array(), $this->initializerf02f9) || 1) && $this->valueHolder91395 = $valueHolder91395;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder91395;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder91395;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
