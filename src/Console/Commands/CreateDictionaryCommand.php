<?php

namespace Dictionaries\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateDictionaryCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dictionary {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new dictionary class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Dictionary';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        parent::handle();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/dictionary.stub');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.$stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        if (!is_dir(app_path('Models\Dictionaries'))) {
            mkdir(app_path('Models\Dictionaries'));
        }

        return is_dir(app_path('Models\Dictionaries')) ? $rootNamespace.'\\Models\\Dictionaries' : $rootNamespace;
    }
}
