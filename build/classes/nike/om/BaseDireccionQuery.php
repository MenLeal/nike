<?php


/**
 * Base class that represents a query for the 'direccion' table.
 *
 *
 *
 * @method DireccionQuery orderByIdAddr($order = Criteria::ASC) Order by the id column
 * @method DireccionQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method DireccionQuery orderByCompleto($order = Criteria::ASC) Order by the callepcn column
 * @method DireccionQuery orderByCodigoPostal($order = Criteria::ASC) Order by the cp column
 * @method DireccionQuery orderByIndicaciones($order = Criteria::ASC) Order by the indic column
 *
 * @method DireccionQuery groupByIdAddr() Group by the id column
 * @method DireccionQuery groupByIdUsuario() Group by the idusuario column
 * @method DireccionQuery groupByCompleto() Group by the callepcn column
 * @method DireccionQuery groupByCodigoPostal() Group by the cp column
 * @method DireccionQuery groupByIndicaciones() Group by the indic column
 *
 * @method DireccionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DireccionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DireccionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DireccionQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method DireccionQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method DireccionQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method DireccionQuery leftJoinEnvio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Envio relation
 * @method DireccionQuery rightJoinEnvio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Envio relation
 * @method DireccionQuery innerJoinEnvio($relationAlias = null) Adds a INNER JOIN clause to the query using the Envio relation
 *
 * @method Direccion findOne(PropelPDO $con = null) Return the first Direccion matching the query
 * @method Direccion findOneOrCreate(PropelPDO $con = null) Return the first Direccion matching the query, or a new Direccion object populated from the query conditions when no match is found
 *
 * @method Direccion findOneByIdUsuario(int $idusuario) Return the first Direccion filtered by the idusuario column
 * @method Direccion findOneByCompleto(string $callepcn) Return the first Direccion filtered by the callepcn column
 * @method Direccion findOneByCodigoPostal(string $cp) Return the first Direccion filtered by the cp column
 * @method Direccion findOneByIndicaciones(string $indic) Return the first Direccion filtered by the indic column
 *
 * @method array findByIdAddr(int $id) Return Direccion objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Direccion objects filtered by the idusuario column
 * @method array findByCompleto(string $callepcn) Return Direccion objects filtered by the callepcn column
 * @method array findByCodigoPostal(string $cp) Return Direccion objects filtered by the cp column
 * @method array findByIndicaciones(string $indic) Return Direccion objects filtered by the indic column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseDireccionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDireccionQuery object.
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
            $modelName = 'Direccion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DireccionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DireccionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DireccionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DireccionQuery) {
            return $criteria;
        }
        $query = new DireccionQuery(null, null, $modelAlias);

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
     * @return   Direccion|Direccion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DireccionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DireccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Direccion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAddr($key, $con = null)
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
     * @return                 Direccion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `callepcn`, `cp`, `indic` FROM `direccion` WHERE `id` = :p0';
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
            $obj = new Direccion();
            $obj->hydrate($row);
            DireccionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Direccion|Direccion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Direccion[]|mixed the list of results, formatted by the current formatter
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
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DireccionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DireccionPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAddr(1234); // WHERE id = 1234
     * $query->filterByIdAddr(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdAddr(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdAddr(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idAddr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByIdAddr($idAddr = null, $comparison = null)
    {
        if (is_array($idAddr)) {
            $useMinMax = false;
            if (isset($idAddr['min'])) {
                $this->addUsingAlias(DireccionPeer::ID, $idAddr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAddr['max'])) {
                $this->addUsingAlias(DireccionPeer::ID, $idAddr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DireccionPeer::ID, $idAddr, $comparison);
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
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(DireccionPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(DireccionPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DireccionPeer::IDUSUARIO, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the callepcn column
     *
     * Example usage:
     * <code>
     * $query->filterByCompleto('fooValue');   // WHERE callepcn = 'fooValue'
     * $query->filterByCompleto('%fooValue%'); // WHERE callepcn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $completo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByCompleto($completo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($completo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $completo)) {
                $completo = str_replace('*', '%', $completo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::CALLEPCN, $completo, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoPostal('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCodigoPostal('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigoPostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByCodigoPostal($codigoPostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigoPostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigoPostal)) {
                $codigoPostal = str_replace('*', '%', $codigoPostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::CP, $codigoPostal, $comparison);
    }

    /**
     * Filter the query on the indic column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicaciones('fooValue');   // WHERE indic = 'fooValue'
     * $query->filterByIndicaciones('%fooValue%'); // WHERE indic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indicaciones The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function filterByIndicaciones($indicaciones = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indicaciones)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $indicaciones)) {
                $indicaciones = str_replace('*', '%', $indicaciones);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DireccionPeer::INDIC, $indicaciones, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DireccionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(DireccionPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DireccionPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return DireccionQuery The current query, for fluid interface
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
     * Filter the query by a related Envio object
     *
     * @param   Envio|PropelObjectCollection $envio  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DireccionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEnvio($envio, $comparison = null)
    {
        if ($envio instanceof Envio) {
            return $this
                ->addUsingAlias(DireccionPeer::ID, $envio->getIdAddr(), $comparison);
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
     * @return DireccionQuery The current query, for fluid interface
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
     * @param   Direccion $direccion Object to remove from the list of results
     *
     * @return DireccionQuery The current query, for fluid interface
     */
    public function prune($direccion = null)
    {
        if ($direccion) {
            $this->addUsingAlias(DireccionPeer::ID, $direccion->getIdAddr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
