<h1>Iniciando pratica com include</h1>
{{-- Variações de Include --}}

{{-- @includeWhen(false, 'components.component', ['html' => '<h1>Componente1</h1>'] ) --}}
{{-- @includeWhen(false, 'components.component', ['html' => '<h1>Componente1</h1>'] ) --}}
{{-- @includeIf('components.component1', ['html' => '<h1>Componente1</h1>'] ) --}}
@includeUnlass(true,'components.component1', ['html' => '<h1>Componente1</h1>'] )
