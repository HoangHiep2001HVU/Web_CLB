<div class="row">
    <div class="col l-12">
        <div class="header">
            <h1>Nhưng câu hỏi chủa chủ đề A</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l-8">
        <div class="search">
            <p>Tìm kiếm: <input type="text" id="search_question" onkeyup="search('search_question','table_question',0);" placeholder="Tìm kiếm câu hỏi" title="Tìm kiếm chủ đề" /></p>
        </div>
    </div>
    <div class="col l-4">
        <div class="number">
            <p>Tổng số câu hỏi: 5</p>
            <p><button>Thêm câu hỏi</button></p>
        </div>
    </div>
</div>
<table class="data row">
    <tbody id="table_question" class="col l-12">
        <?php
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='posts.php?email=$email&question=1'>
                            <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                            <div>
                                <h2>Câu hỏi 1</h2>
                                <p>Miêu tả 1</p>
                            </div>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='posts.php?email=$email&question=2'>
                            <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                            <div>
                                <h2>Câu hỏi 2</h2>
                                <p>Miêu tả 2</p>
                            </div>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                    <td class='col l-12'>
                        <a href='posts.php?email=$email&question=3'>
                            <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                            <div>
                                <h2>Câu hỏi 3</h2>
                                <p>Miêu tả 3</p>
                            </div>
                        </a>
                    </td>
                </tr>";
        echo "<tr class='row'>
                <td class='col l-12'>
                    <a href='posts.php?email=$email&question=4'>
                        <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                        <div>
                            <h2>Câu hỏi 4</h2>
                            <p>Miêu tả 4</p>
                        </div>
                    </a>
                </td>
            </tr>";
        echo "<tr class='row'>
            <td class='col l-12'>
                <a href='posts.php?email=$email&question=5'>
                    <img src='../public/gif/question.gif' alt='icon câu hỏi' />
                    <div>
                        <h2>Câu hỏi 5</h2>
                        <p>Miêu tả 5</p>    
                    </div>
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