<?php


/**
 * Base class that represents a query for the 'compra' table.
 *
 *
 *
 * @method CompraQuery orderByIdCompra($order = Criteria::ASC) Order by the id column
 * @method CompraQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method CompraQuery orderByIdProducto($order = Criteria::ASC) Order by the idproducto column
 * @method CompraQuery orderByEstatus($order = Criteria::ASC) Order by the estatus column
 * @method CompraQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 *
 * @method CompraQuery groupByIdCompra() Group by the id column
 * @method CompraQuery groupByIdUsuario() Group by the idusuario column
 * @method CompraQuery groupByIdProducto() Group by the idproducto column
 * @method CompraQuery groupByEstatus() Group by the estatus column
 * @method CompraQuery groupByFecha() Group by the fecha column
 *
 * @method CompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompraQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method CompraQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method CompraQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method CompraQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method CompraQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method CompraQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method CompraQuery leftJoinEnvio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Envio relation
 * @method CompraQuery rightJoinEnvio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Envio relation
 * @method CompraQuery innerJoinEnvio($relationAlias = null) Adds a INNER JOIN clause to the query using the Envio relation
 *
 * @method Compra findOne(PropelPDO $con = null) Return the first Compra matching the query
 * @method Compra findOneOrCreate(PropelPDO $con = null) Return the first Compra matching the query, or a new Compra object populated from the query conditions when no match is found
 *
 * @method Compra findOneByIdUsuario(int $idusuario) Return the first Compra filtered by the idusuario column
 * @method Compra findOneByIdProducto(int $idproducto) Return the first Compra filtered by the idproducto column
 * @method Compra findOneByEstatus(int $estatus) Return the first Compra filtered by the estatus column
 * @method Compra findOneByFecha(string $fecha) Return the first Compra filtered by the fecha column
 *
 * @method array findByIdCompra(int $id) Return Compra objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Compra objects filtered by the idusuario column
 * @method array findByIdProducto(int $idproducto) Return Compra objects filtered by the idproducto column
 * @method array findByEstatus(int $estatus) Return Compra objects filtered by the estatus column
 * @method array findByFecha(string $fecha) Return Compra objects filtered by the fecha column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseCompraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompraQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'nike';
        }
        if (null === $modelName) {
            $modelName = 'Compra';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompraQuery) {
            return $criteria;
        }
        $query = new CompraQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Compra|Compra[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCompra($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `idproducto`, `estatus`, `fecha` FROM `compra` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Compra();
            $obj->hydrate($row);
            CompraPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Compra|Compra[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Compra[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompraPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompraPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompra(1234); // WHERE id = 1234
     * $query->filterByIdCompra(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdCompra(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdCompra(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idCompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdCompra($idCompra = null, $comparison = null)
    {
        if (is_array($idCompra)) {
            $useMinMax = false;
            if (isset($idCompra['min'])) {
                $this->addUsingAlias(CompraPeer::ID, $idCompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompra['max'])) {
                $this->addUsingAlias(CompraPeer::ID, $idCompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::ID, $idCompra, $comparison);
    }

    /**
     * Filter the query on the idusuario column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE idusuario = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE idusuario IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE idusuario >= 12
     * $query->filterByIdUsuario(array('max' => 12)); // WHERE idusuario <= 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(CompraPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(CompraPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdProducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdProducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdProducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idProducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdProducto($idProducto = null, $comparison = null)
    {
        if (is_array($idProducto)) {
            $useMinMax = false;
            if (isset($idProducto['min'])) {
                $this->addUsingAlias(CompraPeer::IDPRODUCTO, $idProducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProducto['max'])) {
                $this->addUsingAlias(CompraPeer::IDPRODUCTO, $idProducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDPRODUCTO, $idProducto, $comparison);
    }

    /**
     * Filter the query on the estatus column
     *
     * @param     mixed $estatus The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByEstatus($estatus = null, $comparison = null)
    {
        if (is_scalar($estatus)) {
            $estatus = CompraPeer::getSqlValueForEnum(CompraPeer::ESTATUS, $estatus);
        } elseif (is_array($estatus)) {
            $convertedValues = array();
            foreach ($estatus as $value) {
                $convertedValues[] = CompraPeer::getSqlValueForEnum(CompraPeer::ESTATUS, $value);
            }
            $estatus = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::ESTATUS, $estatus, $comparison);
    }

    /**
     * Filter the query on the fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByFecha('2011-03-14'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha('now'); // WHERE fecha = '2011-03-14'
     * $query->filterByFecha(array('max' => 'yesterday')); // WHERE fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $fecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByFecha($fecha = null, $comparison = null)
    {
        if (is_array($fecha)) {
            $useMinMax = false;
            if (isset($fecha['min'])) {
                $this->addUsingAlias(CompraPeer::FECHA, $fecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecha['max'])) {
                $this->addUsingAlias(CompraPeer::FECHA, $fecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::FECHA, $fecha, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(CompraPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(CompraPeer::IDPRODUCTO, $producto->getIdProducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'IdProducto'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Envio object
     *
     * @param   Envio|PropelObjectCollection $envio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEnvio($envio, $comparison = null)
    {
        if ($envio instanceof Envio) {
            return $this
                ->addUsingAlias(CompraPeer::ID, $envio->getIdCompra(), $comparison);
        } elseif ($envio instanceof PropelObjectCollection) {
            return $this
                ->useEnvioQuery()
                ->filterByPrimaryKeys($envio->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByEnvio() only accepts arguments of type Envio or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Envio relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinEnvio($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Envio');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Envio');
        }

        return $this;
    }

    /**
     * Use the Envio relation Envio object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EnvioQuery A secondary query class using the current class as primary query
     */
    public function useEnvioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEnvio($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Envio', 'EnvioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Compra $compra Object to remove from the list of results
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function prune($compra = null)
    {
        if ($compra) {
            $this->addUsingAlias(CompraPeer::ID, $compra->getIdCompra(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
