<?php

namespace Umbrella\Ya\RetornoBoleto\Cnab\Cnab240;

use Easy\Collections\ArrayList;
use Easy\Collections\IVector;
use Umbrella\Ya\RetornoBoleto\Cnab\ICnabHeader;

class HeaderLote extends AbstractHeader implements ICnab240, ICnabHeader
{
    protected $operacao;
    protected $servico;
    protected $formaLancamento;

    /**
     *
     * @var IVector
     */
    protected $mensagens;

    public function __construct()
    {
        $this->mensagens = new ArrayList();
        parent::__construct();
    }

    public function getOperacao()
    {
        return $this->operacao;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function getFormaLancamento()
    {
        return $this->formaLancamento;
    }

    public function getMensagens()
    {
        return $this->mensagens;
    }

    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;
        return $this;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
        return $this;
    }

    public function setFormaLancamento($formaLancamento)
    {
        $this->formaLancamento = $formaLancamento;
        return $this;
    }

    public function setMensagens(IVector $mensagens)
    {
        $this->mensagens = $mensagens;
        return $this;
    }

    public function addMensagem($mensagem)
    {
        $trim = trim($mensagem);
        if (!empty($trim)) {
            $this->cnabs->add($mensagem);
        }
        return $this;
    }

    public function removeMensagem($mensagem)
    {
        $this->cnabs->remove($mensagem);
        return $this;
    }
}