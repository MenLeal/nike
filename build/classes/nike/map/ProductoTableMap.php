<?php



/**
 * This class defines the structure of the 'producto' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.nike.map
 */
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nike.map.ProductoTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('nike');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdProducto', 'INTEGER', true, null, null);
        $this->addColumn('nombre', 'NombreProducto', 'VARCHAR', true, 20, null);
        $this->addColumn('modelo', 'Modelo', 'VARCHAR', true, 20, null);
        $this->addColumn('genero', 'Genero', 'ENUM', true, null, null);
        $this->getColumn('genero', false)->setValueSet(array (
  0 => 'H',
  1 => 'M',
  2 => 'U',
));
        $this->addColumn('color', 'Color', 'VARCHAR', true, 20, null);
        $this->addColumn('estilo', 'Estilo', 'ENUM', true, null, null);
        $this->getColumn('estilo', false)->setValueSet(array (
  0 => 'Street',
  1 => 'Running',
  2 => 'Soccer',
  3 => 'Bascketball',
));
        $this->addColumn('descripcion', 'Descripcion', 'VARCHAR', true, 100, null);
        $this->addColumn('precio', 'Precio', 'INTEGER', true, null, null);
        $this->addColumn('imagen', 'Imagen', 'VARCHAR', true, 20, null);
        $this->addColumn('talla', 'Talla', 'VARCHAR', true, 20, null);
        $this->addColumn('stock_original', 'StockOriginal', 'INTEGER', true, null, null);
        $this->addColumn('stock_actual', 'StockActual', 'INTEGER', false, null, null);
        // validators
        $this->addValidator('nombre', 'required', 'propel.validator.RequiredValidator', '', 'El campo NOMBRE no puede ser vacío');
        $this->addValidator('nombre', 'minLength', 'propel.validator.MinLengthValidator', '5', 'El NOMBRE DEL PRODUCTO no puede ser menor a 3 caracteres');
        $this->addValidator('nombre', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'El NOMBRE DEL PRODUCTO no puede ser mayor a 100 caracteres');
        $this->addValidator('modelo', 'required', 'propel.validator.RequiredValidator', '', 'El campo MODELO no puede ser vacío');
        $this->addValidator('modelo', 'minLength', 'propel.validator.MinLengthValidator', '5', 'El NOMBRE DEL PRODUCTO no puede ser menor a 3 caracteres');
        $this->addValidator('modelo', 'maxLength', 'propel.validator.MaxLengthValidator', '20', 'El NOMBRE DEL PRODUCTO no puede ser mayor a 100 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Favoritos', 'Favoritos', RelationMap::ONE_TO_MANY, array('id' => 'idproducto', ), null, null, 'Favoritoss');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('id' => 'idproducto', ), null, null, 'Compras');
    } // buildRelations()

} // ProductoTableMap
