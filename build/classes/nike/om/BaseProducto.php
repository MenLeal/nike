<?php


/**
 * Base class that represents a row from the 'producto' table.
 *
 *
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseProducto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the nombre field.
     * @var        string
     */
    protected $nombre;

    /**
     * The value for the modelo field.
     * @var        string
     */
    protected $modelo;

    /**
     * The value for the genero field.
     * @var        int
     */
    protected $genero;

    /**
     * The value for the color field.
     * @var        string
     */
    protected $color;

    /**
     * The value for the estilo field.
     * @var        int
     */
    protected $estilo;

    /**
     * The value for the descripcion field.
     * @var        string
     */
    protected $descripcion;

    /**
     * The value for the precio field.
     * @var        int
     */
    protected $precio;

    /**
     * The value for the imagen field.
     * @var        string
     */
    protected $imagen;

    /**
     * The value for the talla field.
     * @var        string
     */
    protected $talla;

    /**
     * The value for the stock_original field.
     * @var        int
     */
    protected $stock_original;

    /**
     * The value for the stock_actual field.
     * @var        int
     */
    protected $stock_actual;

    /**
     * @var        PropelObjectCollection|Favoritos[] Collection to store aggregation of Favoritos objects.
     */
    protected $collFavoritoss;
    protected $collFavoritossPartial;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $favoritossScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $comprasScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getIdProducto()
    {

        return $this->id;
    }

    /**
     * Get the [nombre] column value.
     *
     * @return string
     */
    public function getNombreProducto()
    {

        return $this->nombre;
    }

    /**
     * Get the [modelo] column value.
     *
     * @return string
     */
    public function getModelo()
    {

        return $this->modelo;
    }

    /**
     * Get the [genero] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getGenero()
    {
        if (null === $this->genero) {
            return null;
        }
        $valueSet = ProductoPeer::getValueSet(ProductoPeer::GENERO);
        if (!isset($valueSet[$this->genero])) {
            throw new PropelException('Unknown stored enum key: ' . $this->genero);
        }

        return $valueSet[$this->genero];
    }

    /**
     * Get the [color] column value.
     *
     * @return string
     */
    public function getColor()
    {

        return $this->color;
    }

    /**
     * Get the [estilo] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getEstilo()
    {
        if (null === $this->estilo) {
            return null;
        }
        $valueSet = ProductoPeer::getValueSet(ProductoPeer::ESTILO);
        if (!isset($valueSet[$this->estilo])) {
            throw new PropelException('Unknown stored enum key: ' . $this->estilo);
        }

        return $valueSet[$this->estilo];
    }

    /**
     * Get the [descripcion] column value.
     *
     * @return string
     */
    public function getDescripcion()
    {

        return $this->descripcion;
    }

    /**
     * Get the [precio] column value.
     *
     * @return int
     */
    public function getPrecio()
    {

        return $this->precio;
    }

    /**
     * Get the [imagen] column value.
     *
     * @return string
     */
    public function getImagen()
    {

        return $this->imagen;
    }

    /**
     * Get the [talla] column value.
     *
     * @return string
     */
    public function getTalla()
    {

        return $this->talla;
    }

    /**
     * Get the [stock_original] column value.
     *
     * @return int
     */
    public function getStockOriginal()
    {

        return $this->stock_original;
    }

    /**
     * Get the [stock_actual] column value.
     *
     * @return int
     */
    public function getStockActual()
    {

        return $this->stock_actual;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdProducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ProductoPeer::ID;
        }


        return $this;
    } // setIdProducto()

    /**
     * Set the value of [nombre] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setNombreProducto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[] = ProductoPeer::NOMBRE;
        }


        return $this;
    } // setNombreProducto()

    /**
     * Set the value of [modelo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setModelo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->modelo !== $v) {
            $this->modelo = $v;
            $this->modifiedColumns[] = ProductoPeer::MODELO;
        }


        return $this;
    } // setModelo()

    /**
     * Set the value of [genero] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setGenero($v)
    {
        if ($v !== null) {
            $valueSet = ProductoPeer::getValueSet(ProductoPeer::GENERO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->genero !== $v) {
            $this->genero = $v;
            $this->modifiedColumns[] = ProductoPeer::GENERO;
        }


        return $this;
    } // setGenero()

    /**
     * Set the value of [color] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setColor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->color !== $v) {
            $this->color = $v;
            $this->modifiedColumns[] = ProductoPeer::COLOR;
        }


        return $this;
    } // setColor()

    /**
     * Set the value of [estilo] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setEstilo($v)
    {
        if ($v !== null) {
            $valueSet = ProductoPeer::getValueSet(ProductoPeer::ESTILO);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->estilo !== $v) {
            $this->estilo = $v;
            $this->modifiedColumns[] = ProductoPeer::ESTILO;
        }


        return $this;
    } // setEstilo()

    /**
     * Set the value of [descripcion] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[] = ProductoPeer::DESCRIPCION;
        }


        return $this;
    } // setDescripcion()

    /**
     * Set the value of [precio] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setPrecio($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->precio !== $v) {
            $this->precio = $v;
            $this->modifiedColumns[] = ProductoPeer::PRECIO;
        }


        return $this;
    } // setPrecio()

    /**
     * Set the value of [imagen] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setImagen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->imagen !== $v) {
            $this->imagen = $v;
            $this->modifiedColumns[] = ProductoPeer::IMAGEN;
        }


        return $this;
    } // setImagen()

    /**
     * Set the value of [talla] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setTalla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->talla !== $v) {
            $this->talla = $v;
            $this->modifiedColumns[] = ProductoPeer::TALLA;
        }


        return $this;
    } // setTalla()

    /**
     * Set the value of [stock_original] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setStockOriginal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stock_original !== $v) {
            $this->stock_original = $v;
            $this->modifiedColumns[] = ProductoPeer::STOCK_ORIGINAL;
        }


        return $this;
    } // setStockOriginal()

    /**
     * Set the value of [stock_actual] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setStockActual($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stock_actual !== $v) {
            $this->stock_actual = $v;
            $this->modifiedColumns[] = ProductoPeer::STOCK_ACTUAL;
        }


        return $this;
    } // setStockActual()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->modelo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->genero = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->color = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->estilo = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->descripcion = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->precio = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->imagen = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->talla = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->stock_original = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->stock_actual = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = ProductoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Producto object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collFavoritoss = null;

            $this->collCompras = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductoQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ProductoPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->favoritossScheduledForDeletion !== null) {
                if (!$this->favoritossScheduledForDeletion->isEmpty()) {
                    FavoritosQuery::create()
                        ->filterByPrimaryKeys($this->favoritossScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->favoritossScheduledForDeletion = null;
                }
            }

            if ($this->collFavoritoss !== null) {
                foreach ($this->collFavoritoss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->comprasScheduledForDeletion !== null) {
                if (!$this->comprasScheduledForDeletion->isEmpty()) {
                    CompraQuery::create()
                        ->filterByPrimaryKeys($this->comprasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comprasScheduledForDeletion = null;
                }
            }

            if ($this->collCompras !== null) {
                foreach ($this->collCompras as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ProductoPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductoPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductoPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ProductoPeer::NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre`';
        }
        if ($this->isColumnModified(ProductoPeer::MODELO)) {
            $modifiedColumns[':p' . $index++]  = '`modelo`';
        }
        if ($this->isColumnModified(ProductoPeer::GENERO)) {
            $modifiedColumns[':p' . $index++]  = '`genero`';
        }
        if ($this->isColumnModified(ProductoPeer::COLOR)) {
            $modifiedColumns[':p' . $index++]  = '`color`';
        }
        if ($this->isColumnModified(ProductoPeer::ESTILO)) {
            $modifiedColumns[':p' . $index++]  = '`estilo`';
        }
        if ($this->isColumnModified(ProductoPeer::DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`descripcion`';
        }
        if ($this->isColumnModified(ProductoPeer::PRECIO)) {
            $modifiedColumns[':p' . $index++]  = '`precio`';
        }
        if ($this->isColumnModified(ProductoPeer::IMAGEN)) {
            $modifiedColumns[':p' . $index++]  = '`imagen`';
        }
        if ($this->isColumnModified(ProductoPeer::TALLA)) {
            $modifiedColumns[':p' . $index++]  = '`talla`';
        }
        if ($this->isColumnModified(ProductoPeer::STOCK_ORIGINAL)) {
            $modifiedColumns[':p' . $index++]  = '`stock_original`';
        }
        if ($this->isColumnModified(ProductoPeer::STOCK_ACTUAL)) {
            $modifiedColumns[':p' . $index++]  = '`stock_actual`';
        }

        $sql = sprintf(
            'INSERT INTO `producto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`nombre`':
                        $stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
                        break;
                    case '`modelo`':
                        $stmt->bindValue($identifier, $this->modelo, PDO::PARAM_STR);
                        break;
                    case '`genero`':
                        $stmt->bindValue($identifier, $this->genero, PDO::PARAM_INT);
                        break;
                    case '`color`':
                        $stmt->bindValue($identifier, $this->color, PDO::PARAM_STR);
                        break;
                    case '`estilo`':
                        $stmt->bindValue($identifier, $this->estilo, PDO::PARAM_INT);
                        break;
                    case '`descripcion`':
                        $stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
                        break;
                    case '`precio`':
                        $stmt->bindValue($identifier, $this->precio, PDO::PARAM_INT);
                        break;
                    case '`imagen`':
                        $stmt->bindValue($identifier, $this->imagen, PDO::PARAM_STR);
                        break;
                    case '`talla`':
                        $stmt->bindValue($identifier, $this->talla, PDO::PARAM_STR);
                        break;
                    case '`stock_original`':
                        $stmt->bindValue($identifier, $this->stock_original, PDO::PARAM_INT);
                        break;
                    case '`stock_actual`':
                        $stmt->bindValue($identifier, $this->stock_actual, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdProducto($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ProductoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFavoritoss !== null) {
                    foreach ($this->collFavoritoss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdProducto();
                break;
            case 1:
                return $this->getNombreProducto();
                break;
            case 2:
                return $this->getModelo();
                break;
            case 3:
                return $this->getGenero();
                break;
            case 4:
                return $this->getColor();
                break;
            case 5:
                return $this->getEstilo();
                break;
            case 6:
                return $this->getDescripcion();
                break;
            case 7:
                return $this->getPrecio();
                break;
            case 8:
                return $this->getImagen();
                break;
            case 9:
                return $this->getTalla();
                break;
            case 10:
                return $this->getStockOriginal();
                break;
            case 11:
                return $this->getStockActual();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Producto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Producto'][$this->getPrimaryKey()] = true;
        $keys = ProductoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdProducto(),
            $keys[1] => $this->getNombreProducto(),
            $keys[2] => $this->getModelo(),
            $keys[3] => $this->getGenero(),
            $keys[4] => $this->getColor(),
            $keys[5] => $this->getEstilo(),
            $keys[6] => $this->getDescripcion(),
            $keys[7] => $this->getPrecio(),
            $keys[8] => $this->getImagen(),
            $keys[9] => $this->getTalla(),
            $keys[10] => $this->getStockOriginal(),
            $keys[11] => $this->getStockActual(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collFavoritoss) {
                $result['Favoritoss'] = $this->collFavoritoss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdProducto($value);
                break;
            case 1:
                $this->setNombreProducto($value);
                break;
            case 2:
                $this->setModelo($value);
                break;
            case 3:
                $valueSet = ProductoPeer::getValueSet(ProductoPeer::GENERO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setGenero($value);
                break;
            case 4:
                $this->setColor($value);
                break;
            case 5:
                $valueSet = ProductoPeer::getValueSet(ProductoPeer::ESTILO);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setEstilo($value);
                break;
            case 6:
                $this->setDescripcion($value);
                break;
            case 7:
                $this->setPrecio($value);
                break;
            case 8:
                $this->setImagen($value);
                break;
            case 9:
                $this->setTalla($value);
                break;
            case 10:
                $this->setStockOriginal($value);
                break;
            case 11:
                $this->setStockActual($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ProductoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdProducto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNombreProducto($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setModelo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGenero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setColor($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEstilo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDescripcion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPrecio($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setImagen($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTalla($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStockOriginal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStockActual($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductoPeer::ID)) $criteria->add(ProductoPeer::ID, $this->id);
        if ($this->isColumnModified(ProductoPeer::NOMBRE)) $criteria->add(ProductoPeer::NOMBRE, $this->nombre);
        if ($this->isColumnModified(ProductoPeer::MODELO)) $criteria->add(ProductoPeer::MODELO, $this->modelo);
        if ($this->isColumnModified(ProductoPeer::GENERO)) $criteria->add(ProductoPeer::GENERO, $this->genero);
        if ($this->isColumnModified(ProductoPeer::COLOR)) $criteria->add(ProductoPeer::COLOR, $this->color);
        if ($this->isColumnModified(ProductoPeer::ESTILO)) $criteria->add(ProductoPeer::ESTILO, $this->estilo);
        if ($this->isColumnModified(ProductoPeer::DESCRIPCION)) $criteria->add(ProductoPeer::DESCRIPCION, $this->descripcion);
        if ($this->isColumnModified(ProductoPeer::PRECIO)) $criteria->add(ProductoPeer::PRECIO, $this->precio);
        if ($this->isColumnModified(ProductoPeer::IMAGEN)) $criteria->add(ProductoPeer::IMAGEN, $this->imagen);
        if ($this->isColumnModified(ProductoPeer::TALLA)) $criteria->add(ProductoPeer::TALLA, $this->talla);
        if ($this->isColumnModified(ProductoPeer::STOCK_ORIGINAL)) $criteria->add(ProductoPeer::STOCK_ORIGINAL, $this->stock_original);
        if ($this->isColumnModified(ProductoPeer::STOCK_ACTUAL)) $criteria->add(ProductoPeer::STOCK_ACTUAL, $this->stock_actual);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdProducto();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdProducto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdProducto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Producto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombreProducto($this->getNombreProducto());
        $copyObj->setModelo($this->getModelo());
        $copyObj->setGenero($this->getGenero());
        $copyObj->setColor($this->getColor());
        $copyObj->setEstilo($this->getEstilo());
        $copyObj->setDescripcion($this->getDescripcion());
        $copyObj->setPrecio($this->getPrecio());
        $copyObj->setImagen($this->getImagen());
        $copyObj->setTalla($this->getTalla());
        $copyObj->setStockOriginal($this->getStockOriginal());
        $copyObj->setStockActual($this->getStockActual());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFavoritoss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFavoritos($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCompras() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompra($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdProducto(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Producto Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ProductoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductoPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Favoritos' == $relationName) {
            $this->initFavoritoss();
        }
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
    }

    /**
     * Clears out the collFavoritoss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addFavoritoss()
     */
    public function clearFavoritoss()
    {
        $this->collFavoritoss = null; // important to set this to null since that means it is uninitialized
        $this->collFavoritossPartial = null;

        return $this;
    }

    /**
     * reset is the collFavoritoss collection loaded partially
     *
     * @return void
     */
    public function resetPartialFavoritoss($v = true)
    {
        $this->collFavoritossPartial = $v;
    }

    /**
     * Initializes the collFavoritoss collection.
     *
     * By default this just sets the collFavoritoss collection to an empty array (like clearcollFavoritoss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFavoritoss($overrideExisting = true)
    {
        if (null !== $this->collFavoritoss && !$overrideExisting) {
            return;
        }
        $this->collFavoritoss = new PropelObjectCollection();
        $this->collFavoritoss->setModel('Favoritos');
    }

    /**
     * Gets an array of Favoritos objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Favoritos[] List of Favoritos objects
     * @throws PropelException
     */
    public function getFavoritoss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFavoritossPartial && !$this->isNew();
        if (null === $this->collFavoritoss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFavoritoss) {
                // return empty collection
                $this->initFavoritoss();
            } else {
                $collFavoritoss = FavoritosQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFavoritossPartial && count($collFavoritoss)) {
                      $this->initFavoritoss(false);

                      foreach ($collFavoritoss as $obj) {
                        if (false == $this->collFavoritoss->contains($obj)) {
                          $this->collFavoritoss->append($obj);
                        }
                      }

                      $this->collFavoritossPartial = true;
                    }

                    $collFavoritoss->getInternalIterator()->rewind();

                    return $collFavoritoss;
                }

                if ($partial && $this->collFavoritoss) {
                    foreach ($this->collFavoritoss as $obj) {
                        if ($obj->isNew()) {
                            $collFavoritoss[] = $obj;
                        }
                    }
                }

                $this->collFavoritoss = $collFavoritoss;
                $this->collFavoritossPartial = false;
            }
        }

        return $this->collFavoritoss;
    }

    /**
     * Sets a collection of Favoritos objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $favoritoss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setFavoritoss(PropelCollection $favoritoss, PropelPDO $con = null)
    {
        $favoritossToDelete = $this->getFavoritoss(new Criteria(), $con)->diff($favoritoss);


        $this->favoritossScheduledForDeletion = $favoritossToDelete;

        foreach ($favoritossToDelete as $favoritosRemoved) {
            $favoritosRemoved->setProducto(null);
        }

        $this->collFavoritoss = null;
        foreach ($favoritoss as $favoritos) {
            $this->addFavoritos($favoritos);
        }

        $this->collFavoritoss = $favoritoss;
        $this->collFavoritossPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Favoritos objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Favoritos objects.
     * @throws PropelException
     */
    public function countFavoritoss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFavoritossPartial && !$this->isNew();
        if (null === $this->collFavoritoss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFavoritoss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFavoritoss());
            }
            $query = FavoritosQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collFavoritoss);
    }

    /**
     * Method called to associate a Favoritos object to this object
     * through the Favoritos foreign key attribute.
     *
     * @param    Favoritos $l Favoritos
     * @return Producto The current object (for fluent API support)
     */
    public function addFavoritos(Favoritos $l)
    {
        if ($this->collFavoritoss === null) {
            $this->initFavoritoss();
            $this->collFavoritossPartial = true;
        }

        if (!in_array($l, $this->collFavoritoss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFavoritos($l);

            if ($this->favoritossScheduledForDeletion and $this->favoritossScheduledForDeletion->contains($l)) {
                $this->favoritossScheduledForDeletion->remove($this->favoritossScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Favoritos $favoritos The favoritos object to add.
     */
    protected function doAddFavoritos($favoritos)
    {
        $this->collFavoritoss[]= $favoritos;
        $favoritos->setProducto($this);
    }

    /**
     * @param	Favoritos $favoritos The favoritos object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeFavoritos($favoritos)
    {
        if ($this->getFavoritoss()->contains($favoritos)) {
            $this->collFavoritoss->remove($this->collFavoritoss->search($favoritos));
            if (null === $this->favoritossScheduledForDeletion) {
                $this->favoritossScheduledForDeletion = clone $this->collFavoritoss;
                $this->favoritossScheduledForDeletion->clear();
            }
            $this->favoritossScheduledForDeletion[]= clone $favoritos;
            $favoritos->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Favoritoss from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Favoritos[] List of Favoritos objects
     */
    public function getFavoritossJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FavoritosQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getFavoritoss($query, $con);
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addCompras()
     */
    public function clearCompras()
    {
        $this->collCompras = null; // important to set this to null since that means it is uninitialized
        $this->collComprasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompras collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompras($v = true)
    {
        $this->collComprasPartial = $v;
    }

    /**
     * Initializes the collCompras collection.
     *
     * By default this just sets the collCompras collection to an empty array (like clearcollCompras());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompras($overrideExisting = true)
    {
        if (null !== $this->collCompras && !$overrideExisting) {
            return;
        }
        $this->collCompras = new PropelObjectCollection();
        $this->collCompras->setModel('Compra');
    }

    /**
     * Gets an array of Compra objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compra[] List of Compra objects
     * @throws PropelException
     */
    public function getCompras($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                // return empty collection
                $this->initCompras();
            } else {
                $collCompras = CompraQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collComprasPartial && count($collCompras)) {
                      $this->initCompras(false);

                      foreach ($collCompras as $obj) {
                        if (false == $this->collCompras->contains($obj)) {
                          $this->collCompras->append($obj);
                        }
                      }

                      $this->collComprasPartial = true;
                    }

                    $collCompras->getInternalIterator()->rewind();

                    return $collCompras;
                }

                if ($partial && $this->collCompras) {
                    foreach ($this->collCompras as $obj) {
                        if ($obj->isNew()) {
                            $collCompras[] = $obj;
                        }
                    }
                }

                $this->collCompras = $collCompras;
                $this->collComprasPartial = false;
            }
        }

        return $this->collCompras;
    }

    /**
     * Sets a collection of Compra objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compras A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setProducto(null);
        }

        $this->collCompras = null;
        foreach ($compras as $compra) {
            $this->addCompra($compra);
        }

        $this->collCompras = $compras;
        $this->collComprasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compra objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compra objects.
     * @throws PropelException
     */
    public function countCompras(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompras());
            }
            $query = CompraQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Producto The current object (for fluent API support)
     */
    public function addCompra(Compra $l)
    {
        if ($this->collCompras === null) {
            $this->initCompras();
            $this->collComprasPartial = true;
        }

        if (!in_array($l, $this->collCompras->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompra($l);

            if ($this->comprasScheduledForDeletion and $this->comprasScheduledForDeletion->contains($l)) {
                $this->comprasScheduledForDeletion->remove($this->comprasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compra $compra The compra object to add.
     */
    protected function doAddCompra($compra)
    {
        $this->collCompras[]= $compra;
        $compra->setProducto($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= clone $compra;
            $compra->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Compras from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compra[] List of Compra objects
     */
    public function getComprasJoinUsuario($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompraQuery::create(null, $criteria);
        $query->joinWith('Usuario', $join_behavior);

        return $this->getCompras($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nombre = null;
        $this->modelo = null;
        $this->genero = null;
        $this->color = null;
        $this->estilo = null;
        $this->descripcion = null;
        $this->precio = null;
        $this->imagen = null;
        $this->talla = null;
        $this->stock_original = null;
        $this->stock_actual = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collFavoritoss) {
                foreach ($this->collFavoritoss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCompras) {
                foreach ($this->collCompras as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFavoritoss instanceof PropelCollection) {
            $this->collFavoritoss->clearIterator();
        }
        $this->collFavoritoss = null;
        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductoPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
