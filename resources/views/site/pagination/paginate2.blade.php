
<style>
    /* ===== Pagination (tone đỏ) ===== */
    .pager { display:flex; justify-content:center; margin:24px 0; font-family:inherit; }
    .pager-list { display:flex; align-items:center; gap:8px; list-style:none; padding:0; margin:0; }

    .pager-link, .pager-ellipsis{
        display:inline-flex; align-items:center; justify-content:center;
        min-width:40px; height:40px; padding:0 12px;
        border-radius:10px; border:1px solid #e5e7eb; /* gray-200 */
        background:#fff; color:#dc2626; /* red-600 */
        text-decoration:none; font-weight:600; line-height:1; user-select:none;
        box-shadow:0 0 0 0 rgba(0,0,0,0); transition:all .18s ease;
    }

    .pager--red .pager-link:hover { border-color:#fecaca; box-shadow:0 4px 10px rgba(220,38,38,.12); }
    .pager--red .pager-link.is-active{
        background:#dc2626; color:#fff; border-color:#dc2626; cursor:default;
        box-shadow:0 6px 16px rgba(220,38,38,.25);
    }

    .pager-ellipsis{ border:0; color:#9ca3af; padding:0 4px; min-width:auto; }

    .pager-text{ font-size:14px; margin:0 6px; }
    .pager-link svg{ display:block; }

    .pager-link.is-disabled{
        color:#9ca3af; border-color:#e5e7eb; background:#f9fafb;
        pointer-events:none; cursor:not-allowed; box-shadow:none;
    }

    /* Active focus */
    .pager-link:focus-visible{
        outline:3px solid rgba(220,38,38,.35);
        outline-offset:2px;
    }

    /* Gọn gàng trên mobile */
    @media (max-width:480px){
        .pager-text{ display:none; }             /* chỉ giữ icon Prev/Next */
        .pager-list{ gap:6px; }
        .pager-link, .pager-ellipsis{ min-width:36px; height:36px; padding:0 10px; border-radius:9px; }
    }

</style>


@if ($paginator->hasPages())
    <nav class="pager pager--red" aria-label="Pagination">
        <ul class="pager-list">
            <!-- Prev (disabled ví dụ) -->
            @if (!$paginator->onFirstPage())
                <li class="pager-item">
                    <a class="pager-link is-disabled" aria-disabled="true" tabindex="-1" title="Trang trước" href="{{ $paginator->previousPageUrl() }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                        <span class="pager-text">Prev</span>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pager-item">
                                <a class="pager-link is-active" href="#" aria-current="page" title="Trang {{ $page }}">{{ $page }}</a>
                            </li>
                        @else
                            <li class="pager-item"><a class="pager-link" href="{{ $url }}" title="Trang {{ $page }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-item h6 direct"><i class="icon icon-caret-right"></i></a>
                <!-- Next -->
                <li class="pager-item">
                    <a class="pager-link" href="{{ $paginator->nextPageUrl() }}" title="Trang sau">
                        <span class="pager-text">Next</span>
                        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </a>
                </li>
            @endif

        </ul>
    </nav>
@endif

