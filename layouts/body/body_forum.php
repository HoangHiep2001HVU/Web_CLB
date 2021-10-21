<div class="row">
    <div class="col l-12">
        <div class="header">
            <h1>Các chủ đề câu hỏi?</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_theme" onkeyup="search('search_theme','table_theme',0);" placeholder="Tìm kiếm chủ đề" title="Tìm kiếm chủ đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p>Tổng số chủ đề: 5</p>
            <p><button>Thêm chủ đề</button></p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_theme" class="col l-12">
        <?php
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='$_link=1'>
                            <h2>Chủ đề 1</h2>
                            <p>Miêu tả 1</p>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='$_link=2'>
                            <h2>Chủ đề 2</h2>
                            <p>Miêu tả 2</p>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='$_link=3'>
                            <h2>Chủ đề 3</h2>
                            <p>Miêu tả 3</p>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                <td class='col l-12'>
                    <a href='$_link=4'>
                        <h2>Chủ đề 4</h2>
                        <p>Miêu tả 4</p>
                    </a>
                </td>
            </tr>";
        echo "<tr class='row'>
            <td class='col l-12'>
                <a href='$_link=5'>
                    <h2>Chủ đề 5</h2>
                    <p>Miêu tả 5</p>
                </a>
            </td>
        </tr>";
        ?>
    </tbody>
</table>

<div class="row">
    <div class="number_row col l-12">
        <button id="back">
            < </button>
                <button id="1"> 1 </button>
                <button id="2"> 2 </button>
                <button id="next"> > </button>
    </div>
</div>