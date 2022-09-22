<?php

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_9dfd91d1d9676e1ff9d9b5e93fff04ab21b7cdb463dc7685b93555da91323ab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Twig/Exception/error500.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error500.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\TwigBundle\\views\\Exception\\error500.html.twig");
    }
}
