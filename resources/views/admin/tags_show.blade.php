<!-- DataTables Example -->
<div class="card mb-3 edus-content-item-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        タグ一覧
        <div class="float-right"><a href="{{ URL::to('tags/new') }}"><button class="btn btn-outline-secondary btn-sm">タグ追加</button></a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>タグ名</th>
                        <th>投稿</th>
                        <th>詳細</th>
                        <th colspan="2">アクション</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>タグ名</th>
                        <th>投稿</th>
                        <th>詳細</th>
                        <th colspan="2">アクション</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td><a href="{{ URL::to('tags/' . $tag->tag_id) }}">{{ $tag->tag_title }}</a></td>
                            <td>{{ $tag->posts->count() }}</td>
                            <td><a class="btn btn-primary btn-sm" href={{ URL::to('tags/' . $tag->tag_id) }}>タグで検索</a></td>
                            <td><a class="btn btn-primary btn-sm" href={{ URL::to('tags/' . $tag->tag_id) . '/edit' }}>修正</a></td>
                            <td><a class="btn btn-danger btn-sm" href={{ URL::to('tags/delete/' . $tag->tag_id) }}  onclick="return alert_delete('本当に削除したいですか');">削除</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function alert_delete($message) {
        if(!confirm($message))
        event.preventDefault();
    }
</script>
