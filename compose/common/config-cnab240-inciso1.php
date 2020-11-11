<?php
/**
 * Explicação da estrutura de cada campo
 * 1) - length = A quantidade de caracteres que esse registro deve ter no TXT. 
 *      Caso seja um registro do tipo numérico e esse registro tenha uma quantidade menor que a quantidade de caracteres exigida, deve se completar com zeros a esquerda
 *      Caso Sejaum registro do tipo texto esse registro tenha uma quantidade menor que a quantidade de caracteres exigida, deve se completar com espaços em branco a direita.
 * 
 * 
 * 2) - default = (Um valor fixo, que será exibido diretamente no TXT)
 * 
 * 
 * 3) - field_id = Caso um registro estaja na base de dados, deve informar aqui o field_id onde se deve buscar os registros. 
 *      OBS.: Caso use o field_id, favor setar como null o campo default
 * 
 * 
 * 4) - type = tipo de dado que sera inserido. 
 *      int = a numérico 
 *      string = texto
 * 
 * OBSERVAÇÕES
 * - Os campos textos, não deve conter quaqlquer tipo de caracter especial ou acentuação. 
 *   Já está sendo feito um tratamento para isso, porem sempre se atentar no arquivo TXT para que o mesmo nao seja recusado pelo banco
 * 
 * - O Fromato de data e hora, deve ser na sequência
 *   dia/mes/ano = 01/01/2020. => No arquivo a formatação não deve conter caracteres especiais.
 *   hora : minutos : segundos = 00:00:00 => No arquivo a formatação não deve conter caracteres especiais.
 */
return [
    'HEADER1' => [
        'BANCO' => [ // Numero do banco da entidade pagadora, deve ser confirmado de qual banco sairá o recurso, casso seja Banco Do Brasil seria 001
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [ // Valor default segundo planilha = 0000
            'length' => 4,
            'default' => '0000',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [ //Valor default segundo planilha = 0
            'length' => 1,
            'default' => '0',
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_12' => [// Inserido 9 espaçõs vazios
            'length' => 9,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'INSCRICAO_TIPO' => [ // CPF ou CNPJ da entidade pagadora (1 = CPF ou 2 = CNPJ) deve ser perguntado ao banco
            'length' => 1,
            'default' => '2',
            'field_id' => null,
            'type' => 'int',
        ],
        'CPF_CNPJ_FONTE_PAG' => [ //CPF ou CNPJ da fonte pagadora, colocar com base no que foi informado no campo INSCRICAO_TIPO
            'length' => 14,
            'default' => '05.252.176/0001-54',
            'field_id' => null,
            'type' => 'int',
        ],
        'CONVENIO_BB1' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 9,
            'default' => '265894',
            'field_id' => null,
            'type' => 'int',
        ],
        'CONVENIO_BB2' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 4,
            'default' => '0126',
            'field_id' => null,
            'type' => 'int',
        ],
        'CONVENIO_BB3' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 5,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'CONVENIO_BB4' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 2,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'AGENCIA' => [ //Agência bancária da instituição em questão
            'length' => 5,
            'default' => '1674',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'AGENCIA_DIGITO' => [ //Gidito da agência bancária da instituição em questão
            'length' => 1,
            'default' => '8',
            'field_id' => 'mapped',
            'type' => 'string',
        ],
        'CONTA' => [ //Conta bancária da instituição em questão
            'length' => 12,
            'default' => '12969',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'CONTA_DIGITO' => [ //Digito da conta bancária da instituição em questão
            'length' => 1,
            'default' => '0',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'USO_BANCO_20' => [ //Não usar, uso exclusivo do banco
            'length' => 1,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'NOME_EMPRESA' => [ //Nome da empresa ou instituição em questão
            'length' => 30,
            'default' => 'SECRETARIA DE ESTADO DE CULTURA',
            'field_id' => null,
            'type' => 'string',
        ],
        'NOME_BANCO' => [ //Agência bancária da instituição em questão
            'length' => 30,
            'default' => 'BANCO DO BRASIL S. A.',
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_23' => [ //Não usar, uso exclusivo do banco
            'length' => 10,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'CODIGO_REMESSA' => [ // Por default fomos orientado a deixar sempre 1
            'length' => 1,
            'default' => '1',
            'field_id' => null,
            'type' => 'int',
        ],
        'DATA_GER_ARQUIVO' => [ // Data de geração do arqiovo
            'length' => 8,
            'default' => null,
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'HORA_GER_ARQUIVO' => [ //Horario de geração do arquivo
            'length' => 6,
            'default' => null,
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'NUM_SERQUNCIAL_ARQUIVO' => [ //Número sequancial autoincremente. Esse numero e o número sequencial do documento segundo registro da empresa ou entidade
            'length' => 6,
            'default' => '000001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LAYOUT_ARQUIVO' => [ // Por Default sempre iremos preencher com 030
            'length' => 3,
            'default' => '030',
            'field_id' => null,
            'type' => 'int',
        ],
        'DENCIDADE_GER_ARQUIVO' => [ // Por Default sempre iremos preencher com 5 numeros zero
            'length' => 5,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_30' => [ //Não usar, uso exclusivo do banco
            'length' => 54,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_31' => [ //Não usar, uso exclusivo do banco
            'length' => 15,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
    ],
    'HEADER2' => [
        'BANCO' => [ // Numero do banco que sera usado para debitos dos montantes
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [
            'length' => 4,
            'default' => '0001',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [
            'length' => 1,
            'default' => '1',
            'field_id' => null,
            'type' => 'int',
        ],
        'OPERACAO' => [
            'length' => 1,
            'default' => 'C',
            'field_id' => null,
            'type' => 'string',
        ],
        'SERVICO' => [ // para secretarias estaduais sempre deve ser 98 caso seja municípios deve ser confirmardo com banco
            'length' => 2,
            'default' => '98',
            'field_id' => null,
            'type' => 'int',
        ],
        'FORMA_LANCAMENTO' => [
            'length' => 2,
            'default' => '01',
            'field_id' =>  null,
            'type' => 'int',
        ],
        'LAYOUT_LOTE' => [ // Por default fomos orientados a deichar sempre 020
            'length' => 3,
            'default' => '020',
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_43' => [ //Não usar, uso exclusivo do banco
            'length' => 1,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'INSCRICAO_TIPO' => [ // CPF ou CNPJ da entidade pagadora (1 = CPF ou 2 = CNPJ) deve ser perguntado ao banco 
            'length' => 1,
            'default' => '2',
            'field_id' => null,
            'type' => 'int',
        ],
        'INSCRICAO_NUMERO' => [ //CPF ou CNPJ da fonte pagadora, colocar com base no que foi informado no campo INSCRICAO_TIPO
            'length' => 14,
            'default' => '05.252.176/0001-54',
            'field_id' => null,
            'type' => 'int',
        ],        
        'CONVENIO_BB1' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 9,
            'default' => '265894',
            'field_id' => null,
            'type' => 'int',
        ],
        'CONVENIO_BB2' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 4,
            'default' => '0126',
            'field_id' => null,
            'type' => 'int',
        ],
        'CONVENIO_BB3' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 5,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'CONVENIO_BB4' => [ // Campo CONVÊnio na plinilha do rodiro => ref PDF particularidades BB
            'length' => 2,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'AGENCIA' => [ //Agẽncia bancária da instituição ou empresa em questão
            'length' => 5,
            'default' => '1674',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'AGENCIA_DIGITO' => [ //Digito da agẽncia bancária da instituição ou empresa em questão
            'length' => 1,
            'default' => '8',
            'field_id' => 'mapped',
            'type' => 'string',
        ],
        'CONTA' => [ //COnta da instituição ou empresa em questão
            'length' => 12,
            'default' => '12969',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'CONTA_DIGITO' => [ //Digito conta da instituição ou empresa em questão
            'length' => 1,
            'default' => '0',
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'USO_BANCO_51' => [ //Não usar, uso exclusivo do banco
            'length' => 1,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'NOME_EMPRESA' => [
            'length' => 30,
            'default' => 'SECRETARIA DE ESTADO DE CULTURA',
            'field_id' => 'mapped',
            'type' => 'string',
        ],
        'USO_BANCO_40' => [ //Não usar, uso exclusivo do banco
            'length' => 40,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'LOGRADOURO' => [ // Logradouro do endereço da instituição ou empresa em questão
            'length' => 30,
            'default' => 'AV MAGALHAES BARATA',
            'field_id' => null,
            'type' => 'string',
        ],
        'NUMERO' => [ // Número do endereço da instituição ou empresa em questão
            'length' => 5,
            'default' => '830',
            'field_id' => null,
            'type' => 'int',
        ],
        'COMPLEMENTO' => [ // Complemento do endereço da instituição ou empresa em questão
            'length' => 15,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'CIDADE' => [ // Cidade do endereço da instituição ou empresa em questão
            'length' => 20,
            'default' => 'BELEM',
            'field_id' => null,
            'type' => 'string',
        ],
        'CEP' => [  // CEP do endereço da instituição ou empresa em questão
            'length' => 8,
            'default' => '66.063-240',
            'field_id' => null,
            'type' => 'int',
        ],
        'ESTADO' => [  // Estado do endereço da instituição ou empresa em questão
            'length' => 2,
            'default' => 'PA',
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_60' => [  //Não usar, uso exclusivo do banco
            'length' => 8,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_61' => [  //Não usar, uso exclusivo do banco
            'length' => 10,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
    ],    
    'DETALHE1' => [
        'BANCO' => [ // Informação 
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [
            'length' => 4,
            'default' => '0001',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [
            'length' => 1,
            'default' => '3',
            'field_id' => null,
            'type' => 'int',
        ],
        'NUMERO_REGISTRO' => [
            'length' => 5,
            'default' => '00001',
            'field_id' => null,
            'type' => 'int',
        ],
        'SEGMENTO' => [
            'length' => 1,
            'default' => 'A',
            'field_id' => null,
            'type' => 'string',
        ],
        'TIPO_MOVIMENTO' => [
            'length' => 1,
            'default' => '0',
            'field_id' => null,
            'type' => 'int',
        ],
        'CODIGO_MOVIMENTO' => [
            'length' => 2,
            'default' => '00',
            'field_id' => null,
            'type' => 'int',
        ],       
        'CAMARA_CENTRALIZADORA' => [
            'length' => 3,
            'default' => '000',
            'field_id' => null,
            'type' => 'int',
        ],
        'BEN_CODIGO_BANCO' => [
            'length' => 3,
            'default' => null,
            'field_id' => 'field_111',
            'type' => 'int',
        ],
        'BEN_AGENCIA' => [
            'length' => 5,
            'default' => null,
            'field_id' => 'field_112',
            'type' => 'int',
        ],
        'BEN_AGENCIA_DIGITO' => [
            'length' => 1,
            'default' => null,
            'field_id' => 'field_112',
            'type' => 'int',
        ],
        'BEN_CONTA' => [
            'length' => 12,
            'default' => null,
            'field_id' => 'field_113',
            'type' => 'int',
        ],
        'BEN_CONTA_DIGITO' => [
            'length' => 1,
            'default' => null,
            'field_id' => 'field_113',
            'type' => 'int',
        ],
        'BEN_DIGITO_CONTA_AGENCIA_80' => [
            'length' => 1,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'BEN_NOME' => [
            'length' => 30,
            'default' => null,
            'field_id' => 'field_109',
            'type' => 'string',
        ],
        'BEN_DOC_ATRIB_EMPRESA_82' => [
            'length' => 20,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'DATA_PAGAMENTO' => [
            'length' => 8,
            'default' => null,
            'field_id' => 'mapped',
            'type' => 'int',
        ],
        'TIPO_MOEDA' => [
            'length' => 3,
            'default' => 'BRL',
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_85' => [
            'length' => 15,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'VALOR_INTEIRO' => [
            'length' => 15,
            'default' => null,
            'field_id' => 'mapped',
            'type' => 'int',
        ],        
        'USO_BANCO_88' => [
            'length' => 20,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_89' => [
            'length' => 23,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_90' => [
            'length' => 42,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'CODIGO_FINALIDADE_TED' => [
            'length' => 5,
            'default' => null,
            'field_id' => 'mapped',
            'type' => 'string',
        ],
        'USO_BANCO_92' => [
            'length' => 5,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_93' => [
            'length' => 11,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'TIPO_CONTA' => [
            'length' => 11,
            'default' => null,
            'field_id' => 'field_8131',
            'type' => 'int',
        ]
        

    ],
    'DETALHE2' => [
        'BANCO' => [
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [
            'length' => 4,
            'default' => '0001',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [
            'length' => 1,
            'default' => '3',
            'field_id' => null,
            'type' => 'int',
        ],
        'NUMERO_REGISTRO' => [
            'length' => 5,
            'default' => '00001',
            'field_id' => null,
            'type' => 'int',
        ],
        'SEGMENTO' => [
            'length' => 1,
            'default' => 'B',
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_104' => [
            'length' => 3,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'BEN_TIPO_DOC' => [
            'length' => 1,
            'default' => 1,
            'field_id' => null,
            'type' => 'int',
        ],
        'BEN_CPF' => [ // CPF do beneficiário
            'length' => 14,
            'default' => null,
            'field_id' => 'field_104',
            'type' => 'int',
        ],
        'BEN_ENDERECO_LOGRADOURO' => [ // Logradouro do beneficiário
            'length' => 30,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'string',
        ],
        'BEN_ENDERECO_NUMERO' => [ // Numero endereço do beneficiário
            'length' => 5,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'int',
        ],
        'BEN_ENDERECO_COMPLEMENTO' => [// Complemento endereço do beneficiário
            'length' => 15,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'string',
        ],        
        'BEN_ENDERECO_BAIRRO' => [ // Bairro do beneficiário
            'length' => 15,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'string',
        ],        
        'BEN_ENDERECO_CIDADE' => [ //Cidade do beneficiário
            'length' => 20,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'string',
        ],
        'BEN_ENDERECO_CEP' => [ //CEP do beneficiário
            'length' => 8,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'int',
        ],
        'BEN_ENDERECO_ESTADO' => [ // Estado do beneficiário
            'length' => 2,
            'default' => null,
            'field_id' => 'field_118',
            'type' => 'string',
        ],
        'USO_BANCO_114' => [
            'length' => 83,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_115' => [
            'length' => 15,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_116' => [
            'length' => 7,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_117' => [
            'length' => 8,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
    ],
    'TRAILER1' => [
        'BANCO' => [
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [
            'length' => 4,
            'default' => '0001',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [
            'length' => 1,
            'default' => '5',
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_126' => [
            'length' => 9,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'QUANTIDADE_REGISTROS_127' => [
            'length' => 6,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'VALOR_TOTAL_DOC_INTEIRO' => [
            'length' => 18,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_130' => [
            'length' => 24,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_131' => [
            'length' => 165,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'USO_BANCO_132' => [
            'length' => 10,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
    ],
    'TRAILER2' => [
        'BANCO' => [
            'length' => 3,
            'default' => '001',
            'field_id' => null,
            'type' => 'int',
        ],
        'LOTE' => [
            'length' => 4,
            'default' => '9999',
            'field_id' => null,
            'type' => 'int',
        ],
        'REGISTRO' => [
            'length' => 1,
            'default' => '9',
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_141' => [
            'length' => 9,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ],
        'QUANTIDADE_LOTES-ARQUIVO' => [
            'length' => 6,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'QUANTIDADE_REGISTROS_ARQUIVOS' => [
            'length' => 6,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],       
        'USO_BANCO_144' => [
            'length' => 6,
            'default' => null,
            'field_id' => null,
            'type' => 'int',
        ],
        'USO_BANCO_145' => [
            'length' => 205,
            'default' => null,
            'field_id' => null,
            'type' => 'string',
        ]       
    ],
    'parameters_default' => [
        'status' => 1,
        'defaultBank' => false, // caso exista banco padrão para pagamento, alterar flag => true = sim, false = não;
        'informDefaultBank' => false, // Caso exista um banco padrão para pagamento, informar numero do banco aqui 
        'typesAccount' => [
            'corrente' => 'Conta corrente',
            'poupanca' => 'Conta poupança',
        ],
        'ducumentsType' => [ 
            "cnab240" => true,
            "unbanked" => true 
        ],
        'selfDeclaredBB' => false, // Preencher esse campo, caso exista a pergunta se o requerente é correntista BB ou Não
        'formoReceipt' => 'field_8564', // Campo para informar onde buscar opções de recebimento EX.: CARTEIRA DIGITAL BB ou CONTA BANCÁRIA NO BANCO DO BRASIL ABERTA PELA SECULT-ES
        'savingsDigit' => [
            '0' => '3',
            '1' => '4',
            '2' => '5',
            '3' => '6',
            '4' => '7',
            '5' => '8',
            '6' => '9',
            '7' => 'X',
            '8' => '0',
            '9' => '1',
            'X' => '2',
        ],
        'field_TipoConta' => 'field_8131',// Define onde verificar se o requerente tem conta corrente ou po 
        'field_banco' => 'field_111', 
        'field_agency' => 'field_112',
        'fieldsWalletDigital' =>[
            'agency' => false,
            'account' =>  false
        ],
        'monoParentIgnore' => true,
        'womanMonoParent' => 'field_119',
        'deParaContasbb' => '/CSV/deParaContas.csv', // Caso exista um arquivo para captura de contas bancárioas, colocar o aqruivo na raiz AldirBlanc e passar o caminho aqui 
        'typesReceipt'=> [
            'banked' => [
                'Depósito bancário',
                'CARTEIRA DIGITAL BB'
            ],
            'unbanked' => [
                'Ordem de pagamento para saque nos caixas da rede 24H',
                'CONTA BANCÁRIA NO BANCO DO BRASIL ABERTA PELA SECULT-ES'
            ]
        ]
    ],
    
    
];