@echo off
echo Por: Carlos Cassol
:a
echo Digite "help" para ajuda
echo Digite "sair" para sair

set /p num= "Digite o comando: "


if %num%==version echo Versao: 1.01.2
pause

if %num%==help echo Digite "version" para obter a versao do aplicativo.
if %num%==help echo digite "create" para criar um arquivo txt no diretorio atual, onde se encontra o executavel.
if %num%==help echo Digite "saves" para criar um arquivo .txt contendo informacoes de ajuda.
if %num%==help echo Digite "web" para iniciar o navegador Google Chrome
if %num%==help goto :a

if %num%==web start chrome.exe
pause

if %num%==create set /p nome= "Digite um nome para o arquivo: "
if %num%==create type nul > %nome%.txt
if %num%==create set /p wrt= "Deseja escrever algo no arquivo? 1 para Sim e 2 para Não."
if %wrt%==1 set /p wrt1= "digite o texto: "
if %wrt%==1 echo %wrt1% > %nome%.txt
if %wrt%==1 start %nome%.txt
pause

if %num%==saves type nul > ajuda.txt
if %num%==saves echo Digite "version" para obter a versao do aplicativo. >> ajuda.txt
if %num%==saves echo digite "create" para criar um arquivo txt no diretorio atual, onde se encontra o executavel. >> ajuda.txt
if %num%==saves echo Digite "web" para iniciar o navegador Google Chrome >> ajuda.txt
if %num%==saves echo Digite "print" para criar um arquivo com os comandos de ajuda no diretorio atual. >> ajuda.txt
set /p optPrint= "deseja abrir o arquivo? s pra sim n pra nao: "
if %optPrint% == s start ajuda.txt
pause


if %num%==sair exit

pause
