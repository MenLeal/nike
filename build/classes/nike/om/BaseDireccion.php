<?php


/**
 * Base class that represents a row from the 'direccion' table.
 *
 *
 *
 * @package    propel.generator.nike.om
 */
abstract class BaseDireccion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DireccionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DireccionPeer
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
     * The value for the idusuario field.
     * @var        int
     */
    protected $idusuario;

    /**
     * The value for the callepcn field.
     * @var        string
     */
    protected $callepcn;

    /**
     * The value for the cp field.
     * @var        string
     */
    protected $cp;

    /**
     * The value for the indic field.
     * @var        string
     */
    protected $indic;

    /**
     * @var        Usuario
     */
    protected $aUsuario;

    /**
     * @var        PropelObjectCollection|Envio[] Collection to store aggregation of Envio objects.
     */
    protected $collEnvios;
    protected $collEnviosPartial;

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
    protected $enviosScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getIdAddr()
    {

        return $this->id;
    }

    /**
     * Get the [idusuario] column value.
     *
     * @return int
     */
    public function getIdUsuario()
    {

        return $this->idusuario;
    }

    /**
     * Get the [callepcn] column value.
     *
     * @return string
     */
    public function getCompleto()
    {

        return $this->callepcn;
    }

    /**
     * Get the [cp] column value.
     *
     * @return string
     */
    public function getCodigoPostal()
    {

        return $this->cp;
    }

    /**
     * Get the [indic] column value.
     *
     * @return string
     */
    public function getIndicaciones()
    {

        return $this->indic;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Direccion The current object (for fluent API support)
     */
    public function setIdAddr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = DireccionPeer::ID;
        }


        return $this;
    } // setIdAddr()

    /**
     * Set the value of [idusuario] column.
     *
     * @param  int $v new value
     * @return Direccion The current object (for fluent API support)
     */
    public function setIdUsuario($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idusuario !== $v) {
            $this->idusuario = $v;
            $this->modifiedColumns[] = DireccionPeer::IDUSUARIO;
        }

        if ($this->aUsuario !== null && $this->aUsuario->getIdUsuario() !== $v) {
            $this->aUsuario = null;
        }


        return $this;
    } // setIdUsuario()

    /**
     * Set the value of [callepcn] column.
     *
     * @param  string $v new value
     * @return Direccion The current object (for fluent API support)
     */
    public function setCompleto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->callepcn !== $v) {
            $this->callepcn = $v;
            $this->modifiedColumns[] = DireccionPeer::CALLEPCN;
        }


        return $this;
    } // setCompleto()

    /**
     * Set the value of [cp] column.
     *
     * @param  string $v new value
     * @return Direccion The current object (for fluent API support)
     */
    public function setCodigoPostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = DireccionPeer::CP;
        }


        return $this;
    } // setCodigoPostal()

    /**
     * Set the value of [indic] column.
     *
     * @param  string $v new value
     * @return Direccion The current object (for fluent API support)
     */
    public function setIndicaciones($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->indic !== $v) {
            $this->indic = $v;
            $this->modifiedColumns[] = DireccionPeer::INDIC;
        }


        return $this;
    } // setIndicaciones()

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
            $this->idusuario = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->callepcn = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->indic = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = DireccionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Direccion object", $e);
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

        if ($this->aUsuario !== null && $this->idusuario !== $this->aUsuario->getIdUsuario()) {
            $this->aUsuario = null;
        }
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
            $con = Propel::getConnection(DireccionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DireccionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUsuario = null;
            $this->collEnvios = null;

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
            $con = Propel::getConnection(DireccionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DireccionQuery::create()
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
            $con = Propel::getConnection(DireccionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DireccionPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuario !== null) {
                if ($this->aUsuario->isModified() || $this->aUsuario->isNew()) {
                    $affectedRows += $this->aUsuario->save($con);
                }
                $this->setUsuario($this->aUsuario);
            }

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

            if ($this->enviosScheduledForDeletion !== null) {
                if (!$this->enviosScheduledForDeletion->isEmpty()) {
                    EnvioQuery::create()
                        ->filterByPrimaryKeys($this->enviosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->enviosScheduledForDeletion = null;
                }
            }

            if ($this->collEnvios !== null) {
                foreach ($this->collEnvios as $referrerFK) {
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

        $this->modifiedColumns[] = DireccionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DireccionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DireccionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(DireccionPeer::IDUSUARIO)) {
            $modifiedColumns[':p' . $index++]  = '`idusuario`';
        }
        if ($this->isColumnModified(DireccionPeer::CALLEPCN)) {
            $modifiedColumns[':p' . $index++]  = '`callepcn`';
        }
        if ($this->isColumnModified(DireccionPeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(DireccionPeer::INDIC)) {
            $modifiedColumns[':p' . $index++]  = '`indic`';
        }

        $sql = sprintf(
            'INSERT INTO `direccion` (%s) VALUES (%s)',
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
                    case '`idusuario`':
                        $stmt->bindValue($identifier, $this->idusuario, PDO::PARAM_INT);
                        break;
                    case '`callepcn`':
                        $stmt->bindValue($identifier, $this->callepcn, PDO::PARAM_STR);
                        break;
                    case '`cp`':
                        $stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
                        break;
                    case '`indic`':
                        $stmt->bindValue($identifier, $this->indic, PDO::PARAM_STR);
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
        $this->setIdAddr($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUsuario !== null) {
                if (!$this->aUsuario->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUsuario->getValidationFailures());
                }
            }


            if (($retval = DireccionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collEnvios !== null) {
                    foreach ($this->collEnvios as $referrerFK) {
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
        $pos = DireccionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAddr();
                break;
            case 1:
                return $this->getIdUsuario();
                break;
            case 2:
                return $this->getCompleto();
                break;
            case 3:
                return $this->getCodigoPostal();
                break;
            case 4:
                return $this->getIndicaciones();
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
        if (isset($alreadyDumpedObjects['Direccion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Direccion'][$this->getPrimaryKey()] = true;
        $keys = DireccionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAddr(),
            $keys[1] => $this->getIdUsuario(),
            $keys[2] => $this->getCompleto(),
            $keys[3] => $this->getCodigoPostal(),
            $keys[4] => $this->getIndicaciones(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUsuario) {
                $result['Usuario'] = $this->aUsuario->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collEnvios) {
                $result['Envios'] = $this->collEnvios->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DireccionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAddr($value);
                break;
            case 1:
                $this->setIdUsuario($value);
                break;
            case 2:
                $this->setCompleto($value);
                break;
            case 3:
                $this->setCodigoPostal($value);
                break;
            case 4:
                $this->setIndicaciones($value);
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
        $keys = DireccionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAddr($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdUsuario($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCompleto($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCodigoPostal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIndicaciones($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DireccionPeer::DATABASE_NAME);

        if ($this->isColumnModified(DireccionPeer::ID)) $criteria->add(DireccionPeer::ID, $this->id);
        if ($this->isColumnModified(DireccionPeer::IDUSUARIO)) $criteria->add(DireccionPeer::IDUSUARIO, $this->idusuario);
        if ($this->isColumnModified(DireccionPeer::CALLEPCN)) $criteria->add(DireccionPeer::CALLEPCN, $this->callepcn);
        if ($this->isColumnModified(DireccionPeer::CP)) $criteria->add(DireccionPeer::CP, $this->cp);
        if ($this->isColumnModified(DireccionPeer::INDIC)) $criteria->add(DireccionPeer::INDIC, $this->indic);

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
        $criteria = new Criteria(DireccionPeer::DATABASE_NAME);
        $criteria->add(DireccionPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAddr();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAddr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAddr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Direccion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdUsuario($this->getIdUsuario());
        $copyObj->setCompleto($this->getCompleto());
        $copyObj->setCodigoPostal($this->getCodigoPostal());
        $copyObj->setIndicaciones($this->getIndicaciones());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getEnvios() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addEnvio($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAddr(NULL); // this is a auto-increment column, so set to default value
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
     * @return Direccion Clone of current object.
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
     * @return DireccionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DireccionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Usuario object.
     *
     * @param                  Usuario $v
     * @return Direccion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUsuario(Usuario $v = null)
    {
        if ($v === null) {
            $this->setIdUsuario(NULL);
        } else {
            $this->setIdUsuario($v->getIdUsuario());
        }

        $this->aUsuario = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Usuario object, it will not be re-added.
        if ($v !== null) {
            $v->addDireccion($this);
        }


        return $this;
    }


    /**
     * Get the associated Usuario object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Usuario The associated Usuario object.
     * @throws PropelException
     */
    public function getUsuario(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUsuario === null && ($this->idusuario !== null) && $doQuery) {
            $this->aUsuario = UsuarioQuery::create()->findPk($this->idusuario, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUsuario->addDireccions($this);
             */
        }

        return $this->aUsuario;
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
        if ('Envio' == $relationName) {
            $this->initEnvios();
        }
    }

    /**
     * Clears out the collEnvios collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Direccion The current object (for fluent API support)
     * @see        addEnvios()
     */
    public function clearEnvios()
    {
        $this->collEnvios = null; // important to set this to null since that means it is uninitialized
        $this->collEnviosPartial = null;

        return $this;
    }

    /**
     * reset is the collEnvios collection loaded partially
     *
     * @return void
     */
    public function resetPartialEnvios($v = true)
    {
        $this->collEnviosPartial = $v;
    }

    /**
     * Initializes the collEnvios collection.
     *
     * By default this just sets the collEnvios collection to an empty array (like clearcollEnvios());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initEnvios($overrideExisting = true)
    {
        if (null !== $this->collEnvios && !$overrideExisting) {
            return;
        }
        $this->collEnvios = new PropelObjectCollection();
        $this->collEnvios->setModel('Envio');
    }

    /**
     * Gets an array of Envio objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Direccion is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Envio[] List of Envio objects
     * @throws PropelException
     */
    public function getEnvios($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collEnviosPartial && !$this->isNew();
        if (null === $this->collEnvios || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collEnvios) {
                // return empty collection
                $this->initEnvios();
            } else {
                $collEnvios = EnvioQuery::create(null, $criteria)
                    ->filterByDireccion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collEnviosPartial && count($collEnvios)) {
                      $this->initEnvios(false);

                      foreach ($collEnvios as $obj) {
                        if (false == $this->collEnvios->contains($obj)) {
                          $this->collEnvios->append($obj);
                        }
                      }

                      $this->collEnviosPartial = true;
                    }

                    $collEnvios->getInternalIterator()->rewind();

                    return $collEnvios;
                }

                if ($partial && $this->collEnvios) {
                    foreach ($this->collEnvios as $obj) {
                        if ($obj->isNew()) {
                            $collEnvios[] = $obj;
                        }
                    }
                }

                $this->collEnvios = $collEnvios;
                $this->collEnviosPartial = false;
            }
        }

        return $this->collEnvios;
    }

    /**
     * Sets a collection of Envio objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $envios A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Direccion The current object (for fluent API support)
     */
    public function setEnvios(PropelCollection $envios, PropelPDO $con = null)
    {
        $enviosToDelete = $this->getEnvios(new Criteria(), $con)->diff($envios);


        $this->enviosScheduledForDeletion = $enviosToDelete;

        foreach ($enviosToDelete as $envioRemoved) {
            $envioRemoved->setDireccion(null);
        }

        $this->collEnvios = null;
        foreach ($envios as $envio) {
            $this->addEnvio($envio);
        }

        $this->collEnvios = $envios;
        $this->collEnviosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Envio objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Envio objects.
     * @throws PropelException
     */
    public function countEnvios(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collEnviosPartial && !$this->isNew();
        if (null === $this->collEnvios || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collEnvios) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getEnvios());
            }
            $query = EnvioQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDireccion($this)
                ->count($con);
        }

        return count($this->collEnvios);
    }

    /**
     * Method called to associate a Envio object to this object
     * through the Envio foreign key attribute.
     *
     * @param    Envio $l Envio
     * @return Direccion The current object (for fluent API support)
     */
    public function addEnvio(Envio $l)
    {
        if ($this->collEnvios === null) {
            $this->initEnvios();
            $this->collEnviosPartial = true;
        }

        if (!in_array($l, $this->collEnvios->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddEnvio($l);

            if ($this->enviosScheduledForDeletion and $this->enviosScheduledForDeletion->contains($l)) {
                $this->enviosScheduledForDeletion->remove($this->enviosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Envio $envio The envio object to add.
     */
    protected function doAddEnvio($envio)
    {
        $this->collEnvios[]= $envio;
        $envio->setDireccion($this);
    }

    /**
     * @param	Envio $envio The envio object to remove.
     * @return Direccion The current object (for fluent API support)
     */
    public function removeEnvio($envio)
    {
        if ($this->getEnvios()->contains($envio)) {
            $this->collEnvios->remove($this->collEnvios->search($envio));
            if (null === $this->enviosScheduledForDeletion) {
                $this->enviosScheduledForDeletion = clone $this->collEnvios;
                $this->enviosScheduledForDeletion->clear();
            }
            $this->enviosScheduledForDeletion[]= clone $envio;
            $envio->setDireccion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Direccion is new, it will return
     * an empty collection; or if this Direccion has previously
     * been saved, it will retrieve related Envios from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Direccion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Envio[] List of Envio objects
     */
    public function getEnviosJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = EnvioQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getEnvios($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->idusuario = null;
        $this->callepcn = null;
        $this->cp = null;
        $this->indic = null;
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
            if ($this->collEnvios) {
                foreach ($this->collEnvios as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUsuario instanceof Persistent) {
              $this->aUsuario->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collEnvios instanceof PropelCollection) {
            $this->collEnvios->clearIterator();
        }
        $this->collEnvios = null;
        $this->aUsuario = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DireccionPeer::DEFAULT_STRING_FORMAT);
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
