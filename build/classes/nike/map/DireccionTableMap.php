<?php



/**
 * This class defines the structure of the 'direccion' table.
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
class DireccionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nike.map.DireccionTableMap';

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
        $this->setName('direccion');
        $this->setPhpName('Direccion');
        $this->setClassname('Direccion');
        $this->setPackage('nike');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdAddr', 'INTEGER', true, null, null);
        $this->addForeignKey('idusuario', 'IdUsuario', 'INTEGER', 'usuario', 'id', true, null, null);
        $this->addColumn('callepcn', 'Completo', 'VARCHAR', true, 200, null);
        $this->addColumn('cp', 'CodigoPostal', 'VARCHAR', true, 10, null);
        $this->addColumn('indic', 'Indicaciones', 'VARCHAR', true, 200, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Usuario', 'Usuario', RelationMap::MANY_TO_ONE, array('idusuario' => 'id', ), null, null);
        $this->addRelation('Envio', 'Envio', RelationMap::ONE_TO_MANY, array('id' => 'idaddr', ), null, null, 'Envios');
    } // buildRelations()

} // DireccionTableMap
