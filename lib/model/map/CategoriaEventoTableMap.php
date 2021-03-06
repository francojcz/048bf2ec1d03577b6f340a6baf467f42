<?php


/**
 * This class defines the structure of the 'categoria_evento' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/03/13 03:18:34
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CategoriaEventoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CategoriaEventoTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('categoria_evento');
		$this->setPhpName('CategoriaEvento');
		$this->setClassname('CategoriaEvento');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('CAT_CODIGO', 'CatCodigo', 'INTEGER', true, 11, null);
		$this->addColumn('CAT_NOMBRE', 'CatNombre', 'VARCHAR', false, 200, null);
		$this->addColumn('CAT_FECHA_REGISTRO_SISTEMA', 'CatFechaRegistroSistema', 'TIMESTAMP', false, null, null);
		$this->addColumn('CAT_USU_CREA', 'CatUsuCrea', 'INTEGER', false, 11, null);
		$this->addColumn('CAT_USU_ACTUALIZA', 'CatUsuActualiza', 'INTEGER', false, 11, null);
		$this->addColumn('CAT_FECHA_ACTUALIZACION', 'CatFechaActualizacion', 'TIMESTAMP', false, null, null);
		$this->addColumn('CAT_ELIMINADO', 'CatEliminado', 'SMALLINT', false, 6, null);
		$this->addColumn('CAT_CAUSA_ELIMINACION', 'CatCausaEliminacion', 'VARCHAR', false, 250, null);
		$this->addColumn('CAT_CAUSA_ACTUALIZACION', 'CatCausaActualizacion', 'VARCHAR', false, 250, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // CategoriaEventoTableMap
