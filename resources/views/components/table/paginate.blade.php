@props(['entity'])
<div>
    @if ($entity->hasPages())
        <div class="p-4 bg-white">
            {{ $entity->links() }}
        </div>
    @endif
</div>
