<?php



/**
 * This class defines the structure of the 'usuario' table.
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
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'nike.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('nike');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'IdUsuario', 'INTEGER', true, null, null);
        $this->addColumn('nombre', 'Nombres', 'VARCHAR', true, 150, null);
        $this->addColumn('apellidop', 'ApellidoPaterno', 'VARCHAR', true, 150, null);
        $this->addColumn('apellidom', 'ApellidoMaterno', 'VARCHAR', true, 150, null);
        $this->addColumn('telefono', 'Telefono', 'VARCHAR', true, 10, null);
        $this->addColumn('correo', 'Correo', 'VARCHAR', true, 150, null);
        $this->addColumn('contrasena', 'Contrasena', 'VARCHAR', true, 150, null);
        $this->addColumn('tipo', 'Tipo', 'ENUM', true, null, null);
        $this->getColumn('tipo', false)->setValueSet(array (
  0 => 'Invitado',
  1 => 'Comprador',
  2 => 'Trans',
  3 => 'Admin',
));
        // validators
        $this->addValidator('nombre', 'required', 'propel.validator.RequiredValidator', '', 'El campo nombre no puede ser vacío');
        $this->addValidator('nombre', 'minLength', 'propel.validator.MinLengthValidator', '3', 'El nombre no puede ser menor a 3 caracteres');
        $this->addValidator('nombre', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'El nombre no puede ser mayor a 100 caracteres');
        $this->addValidator('apellidop', 'required', 'propel.validator.RequiredValidator', '', 'El campo APELLIDO PATERNO no puede ser vacío');
        $this->addValidator('apellidop', 'minLength', 'propel.validator.MinLengthValidator', '2', 'El APELLIDO PATERNOno puede ser menor a 2 caracteres');
        $this->addValidator('apellidop', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'El APELLIDO PATERNO no puede ser mayor a 100 caracteres');
        $this->addValidator('apellidom', 'required', 'propel.validator.RequiredValidator', '', 'El campo APELLIDO MATERNO no puede ser vacío');
        $this->addValidator('apellidom', 'minLength', 'propel.validator.MinLengthValidator', '2', 'El APELLIDO MATERNO no puede ser menor a 2 caracteres');
        $this->addValidator('apellidom', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'El APELLIDO MATERNO puede ser mayor a 100 caracteres');
        $this->addValidator('correo', 'required', 'propel.validator.RequiredValidator', '', 'El campo correo electrónico no puede ser vacío');
        $this->addValidator('correo', 'unique', 'propel.validator.UniqueValidator', '', 'El correo electrónico ya se encuentra registrado');
        $this->addValidator('correo', 'match', 'propel.validator.MatchValidator', '/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/', 'Ingrese un correo válido.');
        $this->addValidator('contrasena', 'required', 'propel.validator.RequiredValidator', '', 'El campo contraseña no puede ser vacío');
        $this->addValidator('contrasena', 'minLength', 'propel.validator.MinLengthValidator', '8', 'La contraseña  no puede ser menor a 8 caracteres');
        $this->addValidator('contrasena', 'maxLength', 'propel.validator.MaxLengthValidator', '150', 'La contraseña no puede ser mayor a 10 caracteres');
        $this->addValidator('telefono', 'required', 'propel.validator.RequiredValidator', '', 'El TELEFONO no puede ser vacío');
        $this->addValidator('telefono', 'minLength', 'propel.validator.MinLengthValidator', '10', 'El nombre no puede ser menor a 10 caracteres');
        $this->addValidator('telefono', 'maxLength', 'propel.validator.MaxLengthValidator', '10', 'El nombre no puede ser mayor a 10 caracteres');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Direccion', 'Direccion', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Direccions');
        $this->addRelation('Favoritos', 'Favoritos', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Favoritoss');
        $this->addRelation('Compra', 'Compra', RelationMap::ONE_TO_MANY, array('id' => 'idusuario', ), null, null, 'Compras');
    } // buildRelations()

} // UsuarioTableMap
