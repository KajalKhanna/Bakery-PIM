<?php

namespace ContainerFwyfxQj;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7904d = null;
    private $initializercdff1 = null;
    private static $publicProperties854f3 = [
        
    ];
    public function getConnection()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getConnection', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getMetadataFactory', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getExpressionBuilder', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'beginTransaction', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getCache', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getCache();
    }
    public function transactional($func)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'transactional', array('func' => $func), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->transactional($func);
    }
    public function commit()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'commit', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->commit();
    }
    public function rollback()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'rollback', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getClassMetadata', array('className' => $className), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'createQuery', array('dql' => $dql), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'createNamedQuery', array('name' => $name), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'createQueryBuilder', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'flush', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'clear', array('entityName' => $entityName), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->clear($entityName);
    }
    public function close()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'close', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->close();
    }
    public function persist($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'persist', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'remove', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'refresh', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'detach', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'merge', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getRepository', array('entityName' => $entityName), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'contains', array('entity' => $entity), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getEventManager', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getConfiguration', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'isOpen', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getUnitOfWork', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getProxyFactory', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'initializeObject', array('obj' => $obj), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'getFilters', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'isFiltersStateClean', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'hasFilters', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return $this->valueHolder7904d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercdff1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7904d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7904d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7904d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__get', ['name' => $name], $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        if (isset(self::$publicProperties854f3[$name])) {
            return $this->valueHolder7904d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7904d;
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
        $targetObject = $this->valueHolder7904d;
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
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7904d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7904d;
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
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__isset', array('name' => $name), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7904d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7904d;
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
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__unset', array('name' => $name), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7904d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7904d;
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
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__clone', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        $this->valueHolder7904d = clone $this->valueHolder7904d;
    }
    public function __sleep()
    {
        $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, '__sleep', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
        return array('valueHolder7904d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercdff1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercdff1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercdff1 && ($this->initializercdff1->__invoke($valueHolder7904d, $this, 'initializeProxy', array(), $this->initializercdff1) || 1) && $this->valueHolder7904d = $valueHolder7904d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7904d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7904d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
