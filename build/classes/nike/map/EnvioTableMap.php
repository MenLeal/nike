<?php



/**
 * This class defines the structure of the 'envio' table.
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
class EnvioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nike.map.EnvioTableMap';

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
        $this->setName('envio');
        $this->setPhpName('Envio');
        $this->setClassname('Envio');
        $this->setPackage('nike');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdEnvio', 'INTEGER', true, null, null);
        $this->addForeignKey('idcompra', 'IdCompra', 'INTEGER', 'compra', 'id', true, null, null);
        $this->addColumn('estatus', 'Estatus', 'ENUM', true, null, null);
        $this->getColumn('estatus', false)->setValueSet(array (
  0 => 'Pendiente',
  1 => 'Enviado',
  2 => 'Entregado',
));
        $this->addForeignKey('idaddr', 'IdAddr', 'INTEGER', 'direccion', 'id', true, null, null);
        $this->addColumn('fechaaprox', 'FechaAprox', 'DATE', true, null, null);
        $this->addColumn('fechaentrega', 'FechaEntrega', 'DATE', true, null, null);
        // validators
        $this->addValidator('fechaaprox', 'required', 'propel.validator.RequiredValidator', '', 'LA FECHA no puede ser vacía.');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Compra', 'Compra', RelationMap::MANY_TO_ONE, array('idcompra' => 'id', ), null, null);
        $this->addRelation('Direccion', 'Direccion', RelationMap::MANY_TO_ONE, array('idaddr' => 'id', ), null, null);
    } // buildRelations()

} // EnvioTableMap
