<html>

<head>
    <link rel="stylesheet" href="intro.css">
</head>

<body>
    <!---->
    <?php
    class Persona
    {
        protected $nombre;
        private $apellido1;
        private $apellido2;
        protected $edad;
        private $NIF;

        function __construct($nombre, $apellido1, $apellido2, $edad, $NIF)
        {
            $this->nombre = $nombre;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->edad = $edad;
            $this->NIF = $NIF;
        }

        public function __toString()
        {
            return "<b>Nombre: </b>" . $this->nombre . ",  <b>Primer apellido: </b>" . $this->apellido1
                . ",  <b>Segundo apellido: </b>" . $this->apellido2 . ",  <b>Edad: </b>" . $this->edad . ", <b>  NIF: </b>" . $this->NIF;
        }
    }
    //$per = new Persona("Nico", "munoz", "sanchez", "22", "019");
    //echo $per;

    class Empleado extends Persona
    {
        protected $sueldo;
        private $antiguedad;

        function __construct($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad)
        {
            parent::__construct($nombre, $apellido1, $apellido2, $edad, $NIF);
            $this->sueldo = $sueldo;
            $this->antiguedad = $antiguedad;
        }

        public function getSueldo()
        {
            return $this->sueldo;
        }

        public function setSueldo($sueldo)
        {
            $this->sueldo = $sueldo;
        }

        public function getAntiguedad()
        {
            return $this->antiguedad;
        }

        public function setAntiguedad($antiguedad)
        {
            $this->antiguedad = $antiguedad;
        }

        public function incrementar_sueldo($porc)
        {
            $this->sueldo += $this->sueldo * $porc;
        }

        public function __toString()
        {
            return parent::__toString() . ",  <b>Sueldo:</b> " . $this->sueldo . ",  <b>Antiguedad:</b> " . $this->antiguedad;
        }
    }

    /*$cli = new Cliente("Nico", "munoz", "sanchez", "22", "019", "100", "5");
    $cli->incrementar_sueldo(0.2);
    echo $cli;*/

    class Empresa
    {
        private $empleados = array();
        private $nombre_empresa;
        private $representante_legal;
        private $CIF;
        private $direccion;
        private $localidad;
        private $codigo_postal;

        function __construct($nombre_empresa, $representante_legal, $CIF, $direccion, $localidad, $codigo_postal)
        {
            //$this->clientes = $clientes;
            $this->nombre_empresa = $nombre_empresa;
            $this->representante_legal = $representante_legal;
            $this->CIF = $CIF;
            $this->direccion = $direccion;
            $this->localidad = $localidad;
            $this->codigo_postal = $codigo_postal;
        }

        public function getEmpleados()
        {
            return $this->empleados;
        }

        public function getNombreEmpresa()
        {
            return $this->nombre_empresa;
        }

        public function getRepresentante_legal()
        {
            return $this->representante_legal;
        }

        public function getCIF()
        {
            return $this->CIF;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }

        public function getlocalidad()
        {
            return $this->localidad;
        }

        public function getCodigo_postal()
        {
            return $this->codigo_postal;
        }

        public function __toString()
        {
            return "<b>Nombre:</b> " . $this->nombre_empresa . "<br><b>CIF:</b> " . $this->CIF
                . "<br><b>Representante legal:</b> " . $this->representante_legal . "<br><b>Direccion:</b> " . $this->direccion
                . "<br><b>Localidad:</b> " . $this->localidad . "<br><b>Codigo Postal:</b> " . $this->codigo_postal;
        }

        public function anade_empleado($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad)
        {
            $newCliente = new Empleado($nombre, $apellido1, $apellido2, $edad, $NIF, $sueldo, $antiguedad);
            array_push($this->clientes, $newCliente);
        }


        public function elimina_empleado($NIF)
        {
            foreach ($this->clientes as $key => $value) {
                foreach ($value as $key1) {
                    if ($key1 === $NIF) {
                        unset($this->clientes[$key]);
                    }
                }
            }
        }
        public function visualiza_empleados()
        {
            echo "<b><u>Lista de Empleados</u>:</b>" . "<br>";
            array_multisort($this->clientes);
            foreach ($this->clientes as $key => $value) {
                echo $key . ": " . $value;
                echo "<br>";
            }
        }

        public function mas_antiguos()
        {
            echo "<br><b><u>Empleado más antiguo</u>: <br></b>";
            $arrayAnt = array();
            foreach ($this->clientes as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    if ($key1 === "antiguedad") {
                        array_push($arrayAnt, $value1);
                    }
                }
            }
            foreach ($this->clientes as $key => $value) {
                foreach ($value as $key1 => $value1) {
                    if ($key1 === "antiguedad" and $value1 === max($arrayAnt)) {
                        echo $value . "<br>";
                    }
                }
            }
        }

        public function sueldoMedio()
        {
            $sueldoMedio = 0;

            foreach ($this->clientes as $key => $value) {
                $sueldoMedio += $value->getSueldo();
            }
            $sueldoMedio = $sueldoMedio / count($this->clientes);
            echo "<br><b>Sueldo Medio:</b> " . $sueldoMedio . "<br>";
        }

        public function antiguedadMedia()
        {
            $antMedia = 0;

            foreach ($this->clientes as $key => $value) {
                $antMedia += $value->getAntiguedad();
            }
            $antMedia = $antMedia / count($this->clientes);
            echo "<br><b>Antiguedad Media:</b> " . $antMedia . "<br>";
        }

        public function paganImpuestos_extras()
        {
            echo "<br><b><u>Empleados que cobran más de 3000€</u>: <br></b>";
            foreach ($this->clientes as $key => $value) {
                if ($value->getSueldo() >= 3000) {
                    echo $value . "<br>";
                }
            }
        }
    }

    $empresa = new Empresa("Apple S.A", "Steve Jobs", "011564156", "Sillicion Valley", "California", "60541");
    echo $empresa . "<br>" . "<br>";
    $empresa->anade_empleado("Nico", "Muñoz", "Sanchez", "22", "019", "1500", "1");
    $empresa->anade_empleado("Alvaro", "Teja", "Rodriguez", "31", "056", "3100", "5");
    $empresa->anade_empleado("Jose", "Luis", "Aresti", "28", "042", "3500", "3");
    $empresa->anade_empleado("Alvaro", "Medina", "Martinez", "18", "033", "1100", "0.5");
    $empresa->anade_empleado("Ruben", "Ruiz", "Novo", "20", "031", "1750", "0.5");
    $empresa->anade_empleado("Catalin", "Gukji", "Kolov", "29", "063", "2650", "2.5");
    $empresa->anade_empleado("Han", "Men", "Cheng", "19", "021", "1850", "1.5");
    $empresa->visualiza_empleados();
    $empresa->sueldoMedio();
    $empresa->antiguedadMedia();
    $empresa->mas_antiguos();
    $empresa->paganImpuestos_extras();





    ?>

</body>

</html>
<!---->