<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 *
 *
 * @method ProductoQuery orderByIdProducto($order = Criteria::ASC) Order by the id column
 * @method ProductoQuery orderByNombreProducto($order = Criteria::ASC) Order by the nombre column
 * @method ProductoQuery orderByModelo($order = Criteria::ASC) Order by the modelo column
 * @method ProductoQuery orderByGenero($order = Criteria::ASC) Order by the genero column
 * @method ProductoQuery orderByColor($order = Criteria::ASC) Order by the color column
 * @method ProductoQuery orderByEstilo($order = Criteria::ASC) Order by the estilo column
 * @method ProductoQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method ProductoQuery orderByPrecio($order = Criteria::ASC) Order by the precio column
 * @method ProductoQuery orderByImagen($order = Criteria::ASC) Order by the imagen column
 * @method ProductoQuery orderByTalla($order = Criteria::ASC) Order by the talla column
 * @method ProductoQuery orderByStockOriginal($order = Criteria::ASC) Order by the stock_original column
 * @method ProductoQuery orderByStockActual($order = Criteria::ASC) Order by the stock_actual column
 *
 * @method ProductoQuery groupByIdProducto() Group by the id column
 * @method ProductoQuery groupByNombreProducto() Group by the nombre column
 * @method ProductoQuery groupByModelo() Group by the modelo column
 * @method ProductoQuery groupByGenero() Group by the genero column
 * @method ProductoQuery groupByColor() Group by the color column
 * @method ProductoQuery groupByEstilo() Group by the estilo column
 * @method ProductoQuery groupByDescripcion() Group by the descripcion column
 * @method ProductoQuery groupByPrecio() Group by the precio column
 * @method ProductoQuery groupByImagen() Group by the imagen column
 * @method ProductoQuery groupByTalla() Group by the talla column
 * @method ProductoQuery groupByStockOriginal() Group by the stock_original column
 * @method ProductoQuery groupByStockActual() Group by the stock_actual column
 *
 * @method ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoQuery leftJoinFavoritos($relationAlias = null) Adds a LEFT JOIN clause to the query using the Favoritos relation
 * @method ProductoQuery rightJoinFavoritos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Favoritos relation
 * @method ProductoQuery innerJoinFavoritos($relationAlias = null) Adds a INNER JOIN clause to the query using the Favoritos relation
 *
 * @method ProductoQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method ProductoQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method ProductoQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method Producto findOneByNombreProducto(string $nombre) Return the first Producto filtered by the nombre column
 * @method Producto findOneByModelo(string $modelo) Return the first Producto filtered by the modelo column
 * @method Producto findOneByGenero(int $genero) Return the first Producto filtered by the genero column
 * @method Producto findOneByColor(string $color) Return the first Producto filtered by the color column
 * @method Producto findOneByEstilo(int $estilo) Return the first Producto filtered by the estilo column
 * @method Producto findOneByDescripcion(string $descripcion) Return the first Producto filtered by the descripcion column
 * @method Producto findOneByPrecio(int $precio) Return the first Producto filtered by the precio column
 * @method Producto findOneByImagen(string $imagen) Return the first Producto filtered by the imagen column
 * @method Producto findOneByTalla(string $talla) Return the first Producto filtered by the talla column
 * @method Producto findOneByStockOriginal(int $stock_original) Return the first Producto filtered by the stock_original column
 * @method Producto findOneByStockActual(int $stock_actual) Return the first Producto filtered by the stock_actual column
 *
 * @method array findByIdProducto(int $id) Return Producto objects filtered by the id column
 * @method array findByNombreProducto(string $nombre) Return Producto objects filtered by the nombre column
 * @method array findByModelo(string $modelo) Return Producto objects filtered by the modelo column
 * @method array findByGenero(int $genero) Return Producto objects filtered by the genero column
 * @method array findByColor(string $color) Return Producto objects filtered by the color column
 * @method array findByEstilo(int $estilo) Return Producto objects filtered by the estilo column
 * @method array findByDescripcion(string $descripcion) Return Producto objects filtered by the descripcion column
 * @method array findByPrecio(int $precio) Return Producto objects filtered by the precio column
 * @method array findByImagen(string $imagen) Return Producto objects filtered by the imagen column
 * @method array findByTalla(string $talla) Return Producto objects filtered by the talla column
 * @method array findByStockOriginal(int $stock_original) Return Producto objects filtered by the stock_original column
 * @method array findByStockActual(int $stock_actual) Return Producto objects filtered by the stock_actual column
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoQuery object.
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
            $modelName = 'Producto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoQuery) {
            return $criteria;
        }
        $query = new ProductoQuery(null, null, $modelAlias);

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
     * @return   Producto|Producto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdProducto($key, $con = null)
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nombre`, `modelo`, `genero`, `color`, `estilo`, `descripcion`, `precio`, `imagen`, `talla`, `stock_original`, `stock_actual` FROM `producto` WHERE `id` = :p0';
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
            $obj = new Producto();
            $obj->hydrate($row);
            ProductoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Producto|Producto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Producto[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProducto(1234); // WHERE id = 1234
     * $query->filterByIdProducto(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterByIdProducto(array('min' => 12)); // WHERE id >= 12
     * $query->filterByIdProducto(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $idProducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdProducto($idProducto = null, $comparison = null)
    {
        if (is_array($idProducto)) {
            $useMinMax = false;
            if (isset($idProducto['min'])) {
                $this->addUsingAlias(ProductoPeer::ID, $idProducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProducto['max'])) {
                $this->addUsingAlias(ProductoPeer::ID, $idProducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::ID, $idProducto, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreProducto('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombreProducto('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreProducto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByNombreProducto($nombreProducto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreProducto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreProducto)) {
                $nombreProducto = str_replace('*', '%', $nombreProducto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::NOMBRE, $nombreProducto, $comparison);
    }

    /**
     * Filter the query on the modelo column
     *
     * Example usage:
     * <code>
     * $query->filterByModelo('fooValue');   // WHERE modelo = 'fooValue'
     * $query->filterByModelo('%fooValue%'); // WHERE modelo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modelo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByModelo($modelo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modelo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modelo)) {
                $modelo = str_replace('*', '%', $modelo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::MODELO, $modelo, $comparison);
    }

    /**
     * Filter the query on the genero column
     *
     * @param     mixed $genero The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByGenero($genero = null, $comparison = null)
    {
        if (is_scalar($genero)) {
            $genero = ProductoPeer::getSqlValueForEnum(ProductoPeer::GENERO, $genero);
        } elseif (is_array($genero)) {
            $convertedValues = array();
            foreach ($genero as $value) {
                $convertedValues[] = ProductoPeer::getSqlValueForEnum(ProductoPeer::GENERO, $value);
            }
            $genero = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::GENERO, $genero, $comparison);
    }

    /**
     * Filter the query on the color column
     *
     * Example usage:
     * <code>
     * $query->filterByColor('fooValue');   // WHERE color = 'fooValue'
     * $query->filterByColor('%fooValue%'); // WHERE color LIKE '%fooValue%'
     * </code>
     *
     * @param     string $color The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByColor($color = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($color)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $color)) {
                $color = str_replace('*', '%', $color);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::COLOR, $color, $comparison);
    }

    /**
     * Filter the query on the estilo column
     *
     * @param     mixed $estilo The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByEstilo($estilo = null, $comparison = null)
    {
        if (is_scalar($estilo)) {
            $estilo = ProductoPeer::getSqlValueForEnum(ProductoPeer::ESTILO, $estilo);
        } elseif (is_array($estilo)) {
            $convertedValues = array();
            foreach ($estilo as $value) {
                $convertedValues[] = ProductoPeer::getSqlValueForEnum(ProductoPeer::ESTILO, $value);
            }
            $estilo = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::ESTILO, $estilo, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the precio column
     *
     * Example usage:
     * <code>
     * $query->filterByPrecio(1234); // WHERE precio = 1234
     * $query->filterByPrecio(array(12, 34)); // WHERE precio IN (12, 34)
     * $query->filterByPrecio(array('min' => 12)); // WHERE precio >= 12
     * $query->filterByPrecio(array('max' => 12)); // WHERE precio <= 12
     * </code>
     *
     * @param     mixed $precio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrecio($precio = null, $comparison = null)
    {
        if (is_array($precio)) {
            $useMinMax = false;
            if (isset($precio['min'])) {
                $this->addUsingAlias(ProductoPeer::PRECIO, $precio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($precio['max'])) {
                $this->addUsingAlias(ProductoPeer::PRECIO, $precio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRECIO, $precio, $comparison);
    }

    /**
     * Filter the query on the imagen column
     *
     * Example usage:
     * <code>
     * $query->filterByImagen('fooValue');   // WHERE imagen = 'fooValue'
     * $query->filterByImagen('%fooValue%'); // WHERE imagen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $imagen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByImagen($imagen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($imagen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $imagen)) {
                $imagen = str_replace('*', '%', $imagen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IMAGEN, $imagen, $comparison);
    }

    /**
     * Filter the query on the talla column
     *
     * Example usage:
     * <code>
     * $query->filterByTalla('fooValue');   // WHERE talla = 'fooValue'
     * $query->filterByTalla('%fooValue%'); // WHERE talla LIKE '%fooValue%'
     * </code>
     *
     * @param     string $talla The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByTalla($talla = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($talla)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $talla)) {
                $talla = str_replace('*', '%', $talla);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::TALLA, $talla, $comparison);
    }

    /**
     * Filter the query on the stock_original column
     *
     * Example usage:
     * <code>
     * $query->filterByStockOriginal(1234); // WHERE stock_original = 1234
     * $query->filterByStockOriginal(array(12, 34)); // WHERE stock_original IN (12, 34)
     * $query->filterByStockOriginal(array('min' => 12)); // WHERE stock_original >= 12
     * $query->filterByStockOriginal(array('max' => 12)); // WHERE stock_original <= 12
     * </code>
     *
     * @param     mixed $stockOriginal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByStockOriginal($stockOriginal = null, $comparison = null)
    {
        if (is_array($stockOriginal)) {
            $useMinMax = false;
            if (isset($stockOriginal['min'])) {
                $this->addUsingAlias(ProductoPeer::STOCK_ORIGINAL, $stockOriginal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockOriginal['max'])) {
                $this->addUsingAlias(ProductoPeer::STOCK_ORIGINAL, $stockOriginal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::STOCK_ORIGINAL, $stockOriginal, $comparison);
    }

    /**
     * Filter the query on the stock_actual column
     *
     * Example usage:
     * <code>
     * $query->filterByStockActual(1234); // WHERE stock_actual = 1234
     * $query->filterByStockActual(array(12, 34)); // WHERE stock_actual IN (12, 34)
     * $query->filterByStockActual(array('min' => 12)); // WHERE stock_actual >= 12
     * $query->filterByStockActual(array('max' => 12)); // WHERE stock_actual <= 12
     * </code>
     *
     * @param     mixed $stockActual The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByStockActual($stockActual = null, $comparison = null)
    {
        if (is_array($stockActual)) {
            $useMinMax = false;
            if (isset($stockActual['min'])) {
                $this->addUsingAlias(ProductoPeer::STOCK_ACTUAL, $stockActual['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockActual['max'])) {
                $this->addUsingAlias(ProductoPeer::STOCK_ACTUAL, $stockActual['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::STOCK_ACTUAL, $stockActual, $comparison);
    }

    /**
     * Filter the query by a related Favoritos object
     *
     * @param   Favoritos|PropelObjectCollection $favoritos  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFavoritos($favoritos, $comparison = null)
    {
        if ($favoritos instanceof Favoritos) {
            return $this
                ->addUsingAlias(ProductoPeer::ID, $favoritos->getIdProducto(), $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
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
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(ProductoPeer::ID, $compra->getIdProducto(), $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
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
     * @param   Producto $producto Object to remove from the list of results
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function prune($producto = null)
    {
        if ($producto) {
            $this->addUsingAlias(ProductoPeer::ID, $producto->getIdProducto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
