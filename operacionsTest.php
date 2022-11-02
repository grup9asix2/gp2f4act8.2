<?php
	
	require 'operacions.php';
	use \PHPUnit\Framework\TestCase;
	
	
	class  operacionsTest extends PHPUnit\Framework\TestCase {
	
		private $operacio_test;
 
		protected function setUp(): void{
			$this->operacio_test = new operacions();
		}
 
		protected function tearDown(): void{
			$this->operacio_test = NULL;
			}
 
		public function testSuma(){
			# Test 1
			$result = $this->operacio_test->suma(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->suma(1.2, 3.4);
			$this->assertEquals(4.6, $result);
			# Test 3
			$result = $this->operacio_test->suma(1.2, -5.4);
			$this->assertEquals(-4.2, $result);			
		}
		
		
		public function testResta(){
			$result = $this->operacio_test->resta(0, 0);
                        $this->assertEquals(0, $result);
			$result = $this->operacio_test->resta(1.2, 4.5);
                        $this->assertEquals(-3.3, $result);
			$result = $this->operacio_test->resta(5.3, 1.8);
                        $this->assertEquals(3.5, $result);

		}
		
		public function testMultiplica(){
			$result = $this->operacio_test->multiplica(0, 0);
                        $this->assertEquals(0, $result);
			$result = $this->operacio_test->multiplica(1.2, 4.6);
                        $this->assertEquals(5.52, $result);
			$result = $this->operacio_test->multiplica(5.3, -1.8);
                        $this->assertEquals(-9.54, $result);
			$result = $this->operacio_test->multiplica(-2.5, -3.5);
                        $this->assertEquals(8.75, $result);

		}
		
		public function testDivideix(){
			$result = $this->operacio_test->divideix(8, 2);
			$this->assertEquals(4, $result);
			$result = $this->operacio_test->divideix(3.6, -1.2);
                        $this->assertEquals(-3, $result);
			$result = $this->operacio_test->divideix(-4.8, -2.4);
                        $this->assertEquals(2, $result);


		}
		public function testPotencia(){
			$result = $this->operacio_test->potencia(2, 3);
                        $this->assertEquals(8, $result);
			$result = $this->operacio_test->potencia(2, -1);
                        $this->assertEquals(0.5, $result);
			$result = $this->operacio_test->potencia(-4, -2);
                        $this->assertEquals(0.0625, $result);

		}
		
 	}
?>
	
	

