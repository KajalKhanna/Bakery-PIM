<?php

namespace ContainerKkGQnAM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0de89 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd1ba1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87821 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getConnection', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getMetadataFactory', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getExpressionBuilder', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'beginTransaction', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getCache', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'transactional', array('func' => $func), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->transactional($func);
    }

    public function commit()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'commit', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->commit();
    }

    public function rollback()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'rollback', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getClassMetadata', array('className' => $className), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'createQuery', array('dql' => $dql), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'createNamedQuery', array('name' => $name), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'createQueryBuilder', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'flush', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'clear', array('entityName' => $entityName), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->clear($entityName);
    }

    public function close()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'close', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->close();
    }

    public function persist($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'persist', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'remove', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'refresh', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'detach', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'merge', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'contains', array('entity' => $entity), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getEventManager', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getConfiguration', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'isOpen', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getUnitOfWork', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getProxyFactory', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'initializeObject', array('obj' => $obj), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'getFilters', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'isFiltersStateClean', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'hasFilters', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return $this->valueHolder0de89->hasFilters();
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

        $instance->initializerd1ba1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0de89) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0de89 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0de89->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__get', ['name' => $name], $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        if (isset(self::$publicProperties87821[$name])) {
            return $this->valueHolder0de89->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de89;

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

        $targetObject = $this->valueHolder0de89;
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
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de89;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0de89;
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
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__isset', array('name' => $name), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de89;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0de89;
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
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__unset', array('name' => $name), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0de89;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0de89;
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
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__clone', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        $this->valueHolder0de89 = clone $this->valueHolder0de89;
    }

    public function __sleep()
    {
        $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, '__sleep', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;

        return array('valueHolder0de89');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd1ba1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd1ba1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd1ba1 && ($this->initializerd1ba1->__invoke($valueHolder0de89, $this, 'initializeProxy', array(), $this->initializerd1ba1) || 1) && $this->valueHolder0de89 = $valueHolder0de89;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0de89;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0de89;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
