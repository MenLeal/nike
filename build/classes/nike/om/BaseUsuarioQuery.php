<?php


/**
 * Base class that represents a query for the 'usuario' table.
 *
 *
 *
 * @method UsuarioQuery orderByIdUsuario($order = Criteria::ASC) Order by the id column
 * @method UsuarioQuery orderByNombres($order = Criteria::ASC) Order by the nombre column
 * @method UsuarioQuery orderByApellidoPaterno($order = Criteria::ASC) Order by the apellidop column
 * @method UsuarioQuery orderByApellidoMaterno($order = Criteria::ASC) Order by the apellidom column
 * @method UsuarioQuery orderByTelefono($order = Criteria::ASC) Order by the telefono column
 * @method UsuarioQuery orderByCorreo($order = Criteria::ASC) Order by the correo column
 * @method UsuarioQuery orderByContrasena($order = Criteria::ASC) Order by the contrasena column
 * @method UsuarioQuery orderByTipo($order = Criteria::ASC) Order by the tipo column
 *
 * @method UsuarioQuery groupByIdUsuario() Group by the id column
 * @method UsuarioQuery groupByNombres() Group by the nombre column
 * @method UsuarioQuery groupByApellidoPaterno() Group by the apellidop column
 * @method UsuarioQuery groupByApellidoMaterno() Group by the apellidom column
 * @method UsuarioQuery groupByTelefono() Group by the telefono column
 * @method UsuarioQuery groupByCorreo() Group by the correo column
 * @method UsuarioQuery groupByContrasena() Group by the contrasena column
 * @method UsuarioQuery groupByTipo() Group by the tipo column
 *
 * @method UsuarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsuarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsuarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsuarioQuery leftJoinDireccion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Direccion relation
 * @method UsuarioQuery rightJoinDireccion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Direccion relation
 * @method UsuarioQuery innerJoinDireccion($relationAlias = null) Adds a INNER JOIN clause to the query using the Direccion relation
 *
 * @method UsuarioQuery leftJoinFavoritos($relationAlias = null) Adds a LEFT JOIN clause to the query using the Favoritos relation
 * @method UsuarioQuery rightJoinFavoritos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Favoritos relation
 * @method UsuarioQuery innerJoinFavoritos($relationAlias = null) Adds a INNER JOIN clause to the query using the Favoritos relation
 *
 * @method UsuarioQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method UsuarioQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method UsuarioQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method Usuario findOne(PropelPDO $con = null) Return the first Usuario matching the query
 * @method Usuario findOneOrCreate(PropelPDO $con = null) Return the first Usuario matching the query, or a new Usuario object populated from the query conditions when no match is found
 *
 * @method Usuario findOneByNombres(string $nombre) Return the first Usuario filtered by the nombre column
 * @method Usuario findOneByApellidoPaterno(string $apellidop) Return the first Usuario filtered by the apellidop column
 * @method Usuario findOneByApellidoMaterno(string $apellidom) Return the first Usuario filtered by the apellidom column
 * @method Usuario findOneByTelefono(string $telefono) Return the first Usuario filtered by the telefono column
 * @method Usuario findOneByCorreo(string $correo) Return the first Usuario filtered by the correo column
 * @method Usuario findOneByContrasena(string $contrasena) Return the first Usuario filtered by the contrasena column
 * @method Usuario findOneByTipo(int $tipo) Return the first Usuario filtered by the tipo column
 *
 * @method array findByIdUsuario(int $id) Return Usuario objects filtered by the id column
 * @method array findByNombres(string $nombre) Return Usuario objects filtered by the nombre column
 * @method array findByApellidoPaterno(string $apellidop) Return Usuario objects filtered by the apellidop column
 * @method array findByApellidoMaterno(string $apellidom) Return Usuario objects filtered by the apellidom column
 * @method array findByTelefono(string $telefono) Return Usuario objects filtered by the telefono column
 * @method array findByCorreo(string $correo) Return Usuario objects filtered by the correo column
 * @method array findByContrasena(string $contrasena) Return Usuario objects filtered by the contrasena column
 * @method array findByTipo(int $tipo) Return Usuario objects filtered by the tipo column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseUsuarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsuarioQuery object.
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
            $modelName = 'Usuario';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsuarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UsuarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsuarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsuarioQuery) {
            return $criteria;
        }
        $query = new UsuarioQuery(null, null, $modelAlias);

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
     * @return   Usuario|Usuario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdUsuario($key, $con = null)
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
     * @return                 Usuario A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nombre`, `apellidop`, `apellidom`, `telefono`, `correo`, `contrasena`, `tipo` FROM `usuario` WHERE `id` = :p0';
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
            $obj = new Usuario();
            $obj->hydrate($row);
            UsuarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Usuario|Usuario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Usuario[]|mixed the list of results, formatted by the current formatter
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
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsuarioPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUsuario(1234); // WHERE id = 1234
     * $query->filterByIdUsuario(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdUsuario(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdUsuario(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idUsuario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByIdUsuario($idUsuario = null, $comparison = null)
    {
        if (is_array($idUsuario)) {
            $useMinMax = false;
            if (isset($idUsuario['min'])) {
                $this->addUsingAlias(UsuarioPeer::ID, $idUsuario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUsuario['max'])) {
                $this->addUsingAlias(UsuarioPeer::ID, $idUsuario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::ID, $idUsuario, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombres('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombres('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByNombres($nombres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombres)) {
                $nombres = str_replace('*', '%', $nombres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::NOMBRE, $nombres, $comparison);
    }

    /**
     * Filter the query on the apellidop column
     *
     * Example usage:
     * <code>
     * $query->filterByApellidoPaterno('fooValue');   // WHERE apellidop = 'fooValue'
     * $query->filterByApellidoPaterno('%fooValue%'); // WHERE apellidop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellidoPaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByApellidoPaterno($apellidoPaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellidoPaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellidoPaterno)) {
                $apellidoPaterno = str_replace('*', '%', $apellidoPaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::APELLIDOP, $apellidoPaterno, $comparison);
    }

    /**
     * Filter the query on the apellidom column
     *
     * Example usage:
     * <code>
     * $query->filterByApellidoMaterno('fooValue');   // WHERE apellidom = 'fooValue'
     * $query->filterByApellidoMaterno('%fooValue%'); // WHERE apellidom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apellidoMaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByApellidoMaterno($apellidoMaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apellidoMaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apellidoMaterno)) {
                $apellidoMaterno = str_replace('*', '%', $apellidoMaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::APELLIDOM, $apellidoMaterno, $comparison);
    }

    /**
     * Filter the query on the telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefono('fooValue');   // WHERE telefono = 'fooValue'
     * $query->filterByTelefono('%fooValue%'); // WHERE telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByTelefono($telefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefono)) {
                $telefono = str_replace('*', '%', $telefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::TELEFONO, $telefono, $comparison);
    }

    /**
     * Filter the query on the correo column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreo('fooValue');   // WHERE correo = 'fooValue'
     * $query->filterByCorreo('%fooValue%'); // WHERE correo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByCorreo($correo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correo)) {
                $correo = str_replace('*', '%', $correo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CORREO, $correo, $comparison);
    }

    /**
     * Filter the query on the contrasena column
     *
     * Example usage:
     * <code>
     * $query->filterByContrasena('fooValue');   // WHERE contrasena = 'fooValue'
     * $query->filterByContrasena('%fooValue%'); // WHERE contrasena LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contrasena The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function filterByContrasena($contrasena = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contrasena)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contrasena)) {
                $contrasena = str_replace('*', '%', $contrasena);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::CONTRASENA, $contrasena, $comparison);
    }

    /**
     * Filter the query on the tipo column
     *
     * @param     mixed $tipo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByTipo($tipo = null, $comparison = null)
    {
        if (is_scalar($tipo)) {
            $tipo = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::TIPO, $tipo);
        } elseif (is_array($tipo)) {
            $convertedValues = array();
            foreach ($tipo as $value) {
                $convertedValues[] = UsuarioPeer::getSqlValueForEnum(UsuarioPeer::TIPO, $value);
            }
            $tipo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsuarioPeer::TIPO, $tipo, $comparison);
    }

    /**
     * Filter the query by a related Direccion object
     *
     * @param   Direccion|PropelObjectCollection $direccion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDireccion($direccion, $comparison = null)
    {
        if ($direccion instanceof Direccion) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $direccion->getIdUsuario(), $comparison);
        } elseif ($direccion instanceof PropelObjectCollection) {
            return $this
                ->useDireccionQuery()
                ->filterByPrimaryKeys($direccion->getPrimaryKeys())
                ->endUse();
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Filter the query by a related Favoritos object
     *
     * @param   Favoritos|PropelObjectCollection $favoritos  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFavoritos($favoritos, $comparison = null)
    {
        if ($favoritos instanceof Favoritos) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $favoritos->getIdUsuario(), $comparison);
        } elseif ($favoritos instanceof PropelObjectCollection) {
            return $this
                ->useFavoritosQuery()
                ->filterByPrimaryKeys($favoritos->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFavoritos() only accepts arguments of type Favoritos or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Favoritos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function joinFavoritos($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Favoritos');

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
            $this->addJoinObject($join, 'Favoritos');
        }

        return $this;
    }

    /**
     * Use the Favoritos relation Favoritos object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FavoritosQuery A secondary query class using the current class as primary query
     */
    public function useFavoritosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFavoritos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Favoritos', 'FavoritosQuery');
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UsuarioQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(UsuarioPeer::ID, $compra->getIdUsuario(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
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
     * @return UsuarioQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Usuario $usuario Object to remove from the list of results
     *
     * @return UsuarioQuery The current query, for fluid interface
     */
    public function prune($usuario = null)
    {
        if ($usuario) {
            $this->addUsingAlias(UsuarioPeer::ID, $usuario->getIdUsuario(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
