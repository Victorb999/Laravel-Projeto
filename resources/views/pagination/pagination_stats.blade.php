
@if ($paginator->hasPages())
    Mostrando registros de <strong>{{ ((($paginator->currentPage() -1) * $paginator->perPage()) + 1) }}</strong> até <strong>
        {{ ((($paginator->currentPage() -1) * $paginator->perPage()) + $paginator->count()) }}</strong> de um total <strong>{{ $paginator->total() }}</strong> registros. Página <strong>{{ $paginator->currentPage() }}</strong> /<strong>{{ $paginator->lastPage() }}</strong>
@endif