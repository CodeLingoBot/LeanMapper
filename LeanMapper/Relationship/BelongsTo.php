<?php

/**
 * This file is part of the Lean Mapper library
 *
 * Copyright (c) 2013 Vojtěch Kohout (aka Tharos)
 */

namespace LeanMapper\Relationship;

/**
 * @author Vojtěch Kohout
 */
abstract class BelongsTo
{

	/** @var string */
	private $columnReferencingSourceTable;

	/** @var string */
	private $targetTable;


	/**
	 * @param string $columnReferencingSourceTable
	 * @param string $targetTable
	 */
	public function __construct($columnReferencingSourceTable, $targetTable)
	{
		$this->columnReferencingSourceTable = $columnReferencingSourceTable;
		$this->targetTable = $targetTable;
	}

	/**
	 * @return string
	 */
	public function getColumnReferencingSourceTable()
	{
		return $this->columnReferencingSourceTable;
	}

	/**
	 * @return string
	 */
	public function getTargetTable()
	{
		return $this->targetTable;
	}

}