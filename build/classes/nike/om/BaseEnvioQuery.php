<?php


/**
 * Base class that represents a query for the 'envio' table.
 *
 *
 *
 * @method EnvioQuery orderByIdEnvio($order = Criteria::ASC) Order by the id column
 * @method EnvioQuery orderByIdCompra($order = Criteria::ASC) Order by the idcompra column
 * @method EnvioQuery orderByEstatus($order = Criteria::ASC) Order by the estatus column
 * @method EnvioQuery orderByIdAddr($order = Criteria::ASC) Order by the idaddr column
 * @method EnvioQuery orderByFechaAprox($order = Criteria::ASC) Order by the fechaaprox column
 * @method EnvioQuery orderByFechaEntrega($order = Criteria::ASC) Order by the fechaentrega column
 *
 * @method EnvioQuery groupByIdEnvio() Group by the id column
 * @method EnvioQuery groupByIdCompra() Group by the idcompra column
 * @method EnvioQuery groupByEstatus() Group by the estatus column
 * @method EnvioQuery groupByIdAddr() Group by the idaddr column
 * @method EnvioQuery groupByFechaAprox() Group by the fechaaprox column
 * @method EnvioQuery groupByFechaEntrega() Group by the fechaentrega column
 *
 * @method EnvioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EnvioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EnvioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EnvioQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method EnvioQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method EnvioQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method EnvioQuery leftJoinDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Direccion relation
 * @method EnvioQuery rightJoinDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Direccion relation
 * @method EnvioQuery innerJoinDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Direccion relation
 *
 * @method Envio findOne(PropelPDO $con = null) Return the first Envio matching the query
 * @method Envio findOneOrCreate(PropelPDO $con = null) Return the first Envio matching the query, or a new Envio object populated from the query conditions when no match is found
 *
 * @method Envio findOneByIdCompra(int $idcompra) Return the first Envio filtered by the idcompra column
 * @method Envio findOneByEstatus(int $estatus) Return the first Envio filtered by the estatus column
 * @method Envio findOneByIdAddr(int $idaddr) Return the first Envio filtered by the idaddr column
 * @method Envio findOneByFechaAprox(string $fechaaprox) Return the first Envio filtered by the fechaaprox column
 * @method Envio findOneByFechaEntrega(string $fechaentrega) Return the first Envio filtered by the fechaentrega column
 *
 * @method array findByIdEnvio(int $id) Return Envio objects filtered by the id column
 * @method array findByIdCompra(int $idcompra) Return Envio objects filtered by the idcompra column
 * @method array findByEstatus(int $estatus) Return Envio objects filtered by the estatus column
 * @method array findByIdAddr(int $idaddr) Return Envio objects filtered by the idaddr column
 * @method array findByFechaAprox(string $fechaaprox) Return Envio objects filtered by the fechaaprox column
 * @method array findByFechaEntrega(string $fechaentrega) Return Envio objects filtered by the fechaentrega column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseEnvioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEnvioQuery object.
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
            $modelName = 'Envio';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EnvioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EnvioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EnvioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EnvioQuery) {
            return $criteria;
        }
        $query = new EnvioQuery(null, null, $modelAlias);

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
     * @return   Envio|Envio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EnvioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EnvioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Envio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEnvio($key, $con = null)
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
     * @return                 Envio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idcompra`, `estatus`, `idaddr`, `fechaaprox`, `fechaentrega` FROM `envio` WHERE `id` = :p0';
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
            $obj = new Envio();
            $obj->hydrate($row);
            EnvioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Envio|Envio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Envio[]|mixed the list of results, formatted by the current formatter
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
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EnvioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EnvioPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnvio(1234); // WHERE id = 1234
     * $query->filterByIdEnvio(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdEnvio(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdEnvio(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idEnvio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByIdEnvio($idEnvio = null, $comparison = null)
    {
        if (is_array($idEnvio)) {
            $useMinMax = false;
            if (isset($idEnvio['min'])) {
                $this->addUsingAlias(EnvioPeer::ID, $idEnvio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnvio['max'])) {
                $this->addUsingAlias(EnvioPeer::ID, $idEnvio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::ID, $idEnvio, $comparison);
    }

    /**
     * Filter the query on the idcompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompra(1234); // WHERE idcompra = 1234
     * $query->filterByIdCompra(array(12, 34)); // WHERE idcompra IN (12, 34)
     * $query->filterByIdCompra(array('min' => 12)); // WHERE idcompra >= 12
     * $query->filterByIdCompra(array('max' => 12)); // WHERE idcompra <= 12
     * </code>
     *
     * @see       filterByCompra()
     *
     * @param     mixed $idCompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByIdCompra($idCompra = null, $comparison = null)
    {
        if (is_array($idCompra)) {
            $useMinMax = false;
            if (isset($idCompra['min'])) {
                $this->addUsingAlias(EnvioPeer::IDCOMPRA, $idCompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompra['max'])) {
                $this->addUsingAlias(EnvioPeer::IDCOMPRA, $idCompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::IDCOMPRA, $idCompra, $comparison);
    }

    /**
     * Filter the query on the estatus column
     *
     * @param     mixed $estatus The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByEstatus($estatus = null, $comparison = null)
    {
        if (is_scalar($estatus)) {
            $estatus = EnvioPeer::getSqlValueForEnum(EnvioPeer::ESTATUS, $estatus);
        } elseif (is_array($estatus)) {
            $convertedValues = array();
            foreach ($estatus as $value) {
                $convertedValues[] = EnvioPeer::getSqlValueForEnum(EnvioPeer::ESTATUS, $value);
            }
            $estatus = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::ESTATUS, $estatus, $comparison);
    }

    /**
     * Filter the query on the idaddr column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAddr(1234); // WHERE idaddr = 1234
     * $query->filterByIdAddr(array(12, 34)); // WHERE idaddr IN (12, 34)
     * $query->filterByIdAddr(array('min' => 12)); // WHERE idaddr >= 12
     * $query->filterByIdAddr(array('max' => 12)); // WHERE idaddr <= 12
     * </code>
     *
     * @see       filterByDireccion()
     *
     * @param     mixed $idAddr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByIdAddr($idAddr = null, $comparison = null)
    {
        if (is_array($idAddr)) {
            $useMinMax = false;
            if (isset($idAddr['min'])) {
                $this->addUsingAlias(EnvioPeer::IDADDR, $idAddr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAddr['max'])) {
                $this->addUsingAlias(EnvioPeer::IDADDR, $idAddr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::IDADDR, $idAddr, $comparison);
    }

    /**
     * Filter the query on the fechaaprox column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaAprox('2011-03-14'); // WHERE fechaaprox = '2011-03-14'
     * $query->filterByFechaAprox('now'); // WHERE fechaaprox = '2011-03-14'
     * $query->filterByFechaAprox(array('max' => 'yesterday')); // WHERE fechaaprox < '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaAprox The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByFechaAprox($fechaAprox = null, $comparison = null)
    {
        if (is_array($fechaAprox)) {
            $useMinMax = false;
            if (isset($fechaAprox['min'])) {
                $this->addUsingAlias(EnvioPeer::FECHAAPROX, $fechaAprox['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaAprox['max'])) {
                $this->addUsingAlias(EnvioPeer::FECHAAPROX, $fechaAprox['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::FECHAAPROX, $fechaAprox, $comparison);
    }

    /**
     * Filter the query on the fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByFechaEntrega('2011-03-14'); // WHERE fechaentrega = '2011-03-14'
     * $query->filterByFechaEntrega('now'); // WHERE fechaentrega = '2011-03-14'
     * $query->filterByFechaEntrega(array('max' => 'yesterday')); // WHERE fechaentrega < '2011-03-13'
     * </code>
     *
     * @param     mixed $fechaEntrega The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function filterByFechaEntrega($fechaEntrega = null, $comparison = null)
    {
        if (is_array($fechaEntrega)) {
            $useMinMax = false;
            if (isset($fechaEntrega['min'])) {
                $this->addUsingAlias(EnvioPeer::FECHAENTREGA, $fechaEntrega['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fechaEntrega['max'])) {
                $this->addUsingAlias(EnvioPeer::FECHAENTREGA, $fechaEntrega['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EnvioPeer::FECHAENTREGA, $fechaEntrega, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EnvioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(EnvioPeer::IDCOMPRA, $compra->getIdCompra(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnvioPeer::IDCOMPRA, $compra->toKeyValue('PrimaryKey', 'IdCompra'), $comparison);
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EnvioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDireccion($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(EnvioPeer::IDADDR, $direccion->getIdAddr(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EnvioPeer::IDADDR, $direccion->toKeyValue('PrimaryKey', 'IdAddr'), $comparison);
        } else {
            throw new PropelException('filterByDireccion() only accepts arguments of type Direccion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Direccion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function joinDireccion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Direccion');

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
            $this->addJoinObject($join, 'Direccion');
        }

        return $this;
    }

    /**
     * Use the Direccion relation Direccion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DireccionQuery A secondary query class using the current class as primary query
     */
    public function useDireccionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDireccion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Direccion', 'DireccionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Envio $envio Object to remove from the list of results
     *
     * @return EnvioQuery The current query, for fluid interface
     */
    public function prune($envio = null)
    {
        if ($envio) {
            $this->addUsingAlias(EnvioPeer::ID, $envio->getIdEnvio(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
