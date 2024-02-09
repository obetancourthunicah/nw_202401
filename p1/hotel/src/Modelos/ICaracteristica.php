<?php 
namespace Modelos;
interface ICaracteristica {
    public function getName():string;
    public function getPrice():float;
    public function getDescription(): string;
}