<?php

namespace AndreasElia\PostmanGenerator\Tests\Fixtures;

use Illuminate\Routing\Controller;

class ExampleController extends Controller
{
    public function index(): string
    {
        return 'index';
    }

    public function show(): string
    {
        return 'show';
    }

    public function store(): string
    {
        return 'store';
    }

    /**
     * @note DO NOT REMOVE THIS BLOCK, IT IS USED IN TESTING.
     * We want to extract this text and the next line
     * This is the second line we are extracting to show it works multilines
     *
     * @return string
     */
    public function delete(): string
    {
        return 'delete';
    }

    public function showWithReflectionMethod(ExampleService $service): array
    {
        return $service->getRequestData();
    }

    /**
     * @note DO NOT REMOVE THIS BLOCK, IT IS USED IN TESTING.
     * We want to extract this text and nothing else.
     *
     * @param  ExampleFormRequest  $request
     * @return string
     */
    public function storeWithFormRequest(ExampleFormRequest $request): string
    {
        return 'storeWithFormRequest';
    }
}
