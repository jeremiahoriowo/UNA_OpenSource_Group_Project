<bx_injection:injection_content_after />
                    <bx_injection:banner_bottom />
                </div> <!-- #bx-content-main -->
                <bx_injection:injection_between_content_footer />
            </div> <!-- #bx-content-container -->
        </div>
    </div> <!-- #bx-content-wrapper -->

    <div id="bx-footer-wrapper">
    <div class="bx-def-page-width mx-auto px-3 md:px-4 lg:px-6 box-border">
        <div id="bx-footer" class="bx-footer">
            <div class="bx-footer-cnt mb-4">
                <bx_injection:injection_footer_before />
                <div id="bx-menu-bottom">
                    <?php echo $this->getMenu('sys_footer'); ?>
                </div>
                <bx_injection:injection_footer_after />
            </div>
        </div>
    </div>
</div>

    <?php echo $this->getMenu('sys_site_action'); ?>
</div> <!-- .bx-main -->

        <?php echo $this->parseSystemKey('system_injection_footer', $mixedKeyWrapperHtml);?>
       <bx_injection:injection_footer />
    </body>
</html>