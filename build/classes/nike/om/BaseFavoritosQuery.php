<?php


/**
 * Base class that represents a query for the 'favoritos' table.
 *
 *
 *
 * @method FavoritosQuery orderByIdFavorito($order = Criteria::ASC) Order by the id column
 * @method FavoritosQuery orderByIdUsuario($order = Criteria::ASC) Order by the idusuario column
 * @method FavoritosQuery orderByIdProducto($order = Criteria::ASC) Order by the idproducto column
 * @method FavoritosQuery orderByIsClicked($order = Criteria::ASC) Order by the clicked column
 *
 * @method FavoritosQuery groupByIdFavorito() Group by the id column
 * @method FavoritosQuery groupByIdUsuario() Group by the idusuario column
 * @method FavoritosQuery groupByIdProducto() Group by the idproducto column
 * @method FavoritosQuery groupByIsClicked() Group by the clicked column
 *
 * @method FavoritosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FavoritosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FavoritosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FavoritosQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method FavoritosQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method FavoritosQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method FavoritosQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method FavoritosQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method FavoritosQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Favoritos findOne(PropelPDO $con = null) Return the first Favoritos matching the query
 * @method Favoritos findOneOrCreate(PropelPDO $con = null) Return the first Favoritos matching the query, or a new Favoritos object populated from the query conditions when no match is found
 *
 * @method Favoritos findOneByIdUsuario(int $idusuario) Return the first Favoritos filtered by the idusuario column
 * @method Favoritos findOneByIdProducto(int $idproducto) Return the first Favoritos filtered by the idproducto column
 * @method Favoritos findOneByIsClicked(boolean $clicked) Return the first Favoritos filtered by the clicked column
 *
 * @method array findByIdFavorito(int $id) Return Favoritos objects filtered by the id column
 * @method array findByIdUsuario(int $idusuario) Return Favoritos objects filtered by the idusuario column
 * @method array findByIdProducto(int $idproducto) Return Favoritos objects filtered by the idproducto column
 * @method array findByIsClicked(boolean $clicked) Return Favoritos objects filtered by the clicked column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseFavoritosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFavoritosQuery object.
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
            $modelName = 'Favoritos';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FavoritosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FavoritosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FavoritosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FavoritosQuery) {
            return $criteria;
        }
        $query = new FavoritosQuery(null, null, $modelAlias);

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
     * @return   Favoritos|Favoritos[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FavoritosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FavoritosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Favoritos A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdFavorito($key, $con = null)
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
     * @return                 Favoritos A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idusuario`, `idproducto`, `clicked` FROM `favoritos` WHERE `id` = :p0';
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
            $obj = new Favoritos();
            $obj->hydrate($row);
            FavoritosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Favoritos|Favoritos[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Favoritos[]|mixed the list of results, formatted by the current formatter
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
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FavoritosPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FavoritosPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFavorito(1234); // WHERE id = 1234
     * $query->filterByIdFavorito(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdFavorito(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdFavorito(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idFavorito The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByIdFavorito($idFavorito = null, $comparison = null)
    {
        if (is_array($idFavorito)) {
            $useMinMax = false;
            if (isset($idFavorito['min'])) {
                $this->addUsingAlias(FavoritosPeer::ID, $idFavorito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFavorito['max'])) {
                $this->addUsingAlias(FavoritosPeer::ID, $idFavorito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FavoritosPeer::ID, $idFavorito, $comparison);
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
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(FavoritosPeer::IDUSUARIO, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(FavoritosPeer::IDUSUARIO, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FavoritosPeer::IDUSUARIO, $idUsuario, $comparison);
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
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByIdProducto($idProducto = null, $comparison = null)
    {
        if (is_array($idProducto)) {
            $useMinMax = false;
            if (isset($idProducto['min'])) {
                $this->addUsingAlias(FavoritosPeer::IDPRODUCTO, $idProducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProducto['max'])) {
                $this->addUsingAlias(FavoritosPeer::IDPRODUCTO, $idProducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FavoritosPeer::IDPRODUCTO, $idProducto, $comparison);
    }

    /**
     * Filter the query on the clicked column
     *
     * Example usage:
     * <code>
     * $query->filterByIsClicked(true); // WHERE clicked = true
     * $query->filterByIsClicked('yes'); // WHERE clicked = true
     * </code>
     *
     * @param     boolean|string $isClicked The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function filterByIsClicked($isClicked = null, $comparison = null)
    {
        if (is_string($isClicked)) {
            $isClicked = in_array(strtolower($isClicked), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(FavoritosPeer::CLICKED, $isClicked, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FavoritosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(FavoritosPeer::IDUSUARIO, $usuario->getIdUsuario(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FavoritosPeer::IDUSUARIO, $usuario->toKeyValue('PrimaryKey', 'IdUsuario'), $comparison);
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
     * @return FavoritosQuery The current query, for fluid interface
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
     * @return                 FavoritosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(FavoritosPeer::IDPRODUCTO, $producto->getIdProducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FavoritosPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'IdProducto'), $comparison);
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
     * @return FavoritosQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Favoritos $favoritos Object to remove from the list of results
     *
     * @return FavoritosQuery The current query, for fluid interface
     */
    public function prune($favoritos = null)
    {
        if ($favoritos) {
            $this->addUsingAlias(FavoritosPeer::ID, $favoritos->getIdFavorito(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
