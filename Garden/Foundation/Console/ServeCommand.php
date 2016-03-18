<?php


namespace bt\Garden\Foundation\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ServeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('serve')
            ->setDescription('Run development server')
            ->addOption('host', null, InputOption::VALUE_OPTIONAL, 'Host name', 'localhost')
            ->addOption('port', null, InputOption::VALUE_OPTIONAL, 'Port for the server', 8080);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $host = $input->getOption('host');
        $port = $input->getOption('port');
        
        $this->info('Blog-Tree development server started on http://' . $host . ':' . $port . '/');

        $base = ProcessUtils::escapeArgument($this->laravel->basePath());
        $binary = ProcessUtils::escapeArgument((new PhpExecutableFinder)->find(false));
        
        passthru("{$binary} -S {$host}:{$port} {$base}/server.php");
    }
    
}
