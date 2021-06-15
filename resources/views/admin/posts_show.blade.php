<!-- DataTables Example -->
<div class="card mb-3 edus-content-item-2">
    <div class="card-header">
        <i class="fas fa-table"></i>
        投稿一覧
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>タイトル</th>
                        {{-- <th>Tag</th> --}}
                        <th>著者</th>
                        <th>作成した日</th>
                        <th>詳細</th>
                        <th>アクション</th>
                </thead>
                <tfoot>
                    <tr>
                        <th>タイトル</th>
                        {{-- <th>Tag</th> --}}
                        <th>著者</th>
                        <th>作成した日</th>
                        <th>詳細</th>
                        <th>アクション</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($posts as $post)

                            <td><a href="{{ URL::to('posts/' . $post->post_id) }}">{{ $post->title }}</a></td>
                            {{-- <td>Post's tags</td> --}}
                        <td><a href={{ URL::to('users/' . $post->user_id) }}>{{$post->user->user_name}}</a>
                            </td>
                            <td>{{ $post->date_create }}</td>
                            <td><a class="btn btn-primary btn-sm" href={{ URL::to('posts/' . $post->post_id) }}>表示</a></td>
                            <td><a class="btn btn-danger btn-sm" href={{ URL::to('posts/delete/' . $post->post_id) }} onclick="return alert_delete('本当に削除したいですか');">削除</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
