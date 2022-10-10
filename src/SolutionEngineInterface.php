<?php namespace AshrafSaeed\Math;

interface SolutionEngineInterface {
	
	/**
	 * Solves the given equation. 
	 *
	 * @param  string $equation
	 * @return number
	 */
	public function solve($equation);

	/**
	 * Sets the ExecutionEngineInterface implementation.
	 *
	 * @param \AshrafSaeed\Math\ExecutionEngineInterface
	 */
	public function setExecutionEngine(\AshrafSaeed\Math\ExecutionEngineInterface $executionEngine);

	/**
	 * Gets the ExecutionEngineInterface implementation.
	 *
	 */
	public function getExecutionEngine();

}