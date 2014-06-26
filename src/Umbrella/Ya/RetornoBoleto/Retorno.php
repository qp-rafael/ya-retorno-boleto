<?php

namespace Umbrella\Ya\RetornoBoleto;

use Easy\Collections\ArrayList;
use Easy\Collections\IVector;
use Umbrella\Ya\RetornoBoleto\Cnab\ICnabHeader;
use Umbrella\Ya\RetornoBoleto\Cnab\ICnabTrailer;

class Retorno implements IRetorno
{
    /**
     *
     * @var ICnabHeader
     */
    protected $header;

    /**
     * @var IVector
     */
    protected $lotes;

    /**
     *
     * @var ICnabTrailer
     */
    protected $trailer;

    public function __construct()
    {
        $this->lotes = new ArrayList();
    }

    public function addLote(ILote $lote)
    {
        $this->lotes->add($lote);
        return $this;
    }

    public function removeLote(ILote $lote)
    {
        $this->lotes->remove($lote);
        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getDetails()
    {
        return $this->lotes;
    }

    public function getTrailer()
    {
        return $this->trailer;
    }

    public function setHeader(ICnabHeader $header)
    {
        $this->header = $header;
    }

    public function setTrailer(ICnabTrailer $trailer)
    {
        $this->trailer = $trailer;
    }

    public function getLotes()
    {
        return $this->lotes;
    }

    public function setLotes(IVector $lotes)
    {
        $this->lotes = $lotes;
        return $this;
    }
}