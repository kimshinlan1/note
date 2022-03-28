{extends file="layout.tpl"}
{block name=link_css}
  <link rel="stylesheet" href="./css/{$ac}.css">
{/block}

{block name=body}
	<div class="row">
		<div class="col-md-12">
			<div  class="text-primary h3 text-center">Danh sách các note</h3>
			<div class="list-group group-notes">

{foreach $data as $key => $data_list_note}
						{$date_created = $data_list_note.date_created}
						{$day_created = substr($date_created, 8, 2)} 					  {$month_created = substr($date_created, 5, 2)} 						{$year_created = substr($date_created, 0, 4)}
		    {$hour_created = substr($date_created, 11, 2)}
            {$min_created = substr($date_created, 14, 2)}
{if strlen($data_list_note.body) > 300}

							{$data_list_note.body = substr($data_list_note.body, 0, 300)|cat:' ...'
}
{else}
{$data_list_note.body=$data_list_note.body}
{/if}
<a href="index.php?ac=edit_note&&id={$data_list_note.id_note}" class="list-group-item ">
								<h4 class="list-group-item-heading text-danger note-title">{$data_list_note.title}</h4>
<p class="list-group-item-text">{$data_list_note.body}</p>
<small> Tạo ngày
									{$day_created} tháng
									{$month_created} năm
									{$year_created} lúc
									{$hour_created}:{$min_created}
</small>
</a>

{/foreach}


			</div>
		</div>
	</div>
{/block}