<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5a30c80c89ec125006c9a517e3691073439be0f573d5b801078bfe52c3d49e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34f0c34a40885a85103e405a425b0d3529c2afae699b96932937521cfea32259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f0c34a40885a85103e405a425b0d3529c2afae699b96932937521cfea32259->enter($__internal_34f0c34a40885a85103e405a425b0d3529c2afae699b96932937521cfea32259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3a52528d234ca3fa3b343d93bca2b761879cd5813ff7f86d12b891fc180eac5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a52528d234ca3fa3b343d93bca2b761879cd5813ff7f86d12b891fc180eac5b->enter($__internal_3a52528d234ca3fa3b343d93bca2b761879cd5813ff7f86d12b891fc180eac5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_34f0c34a40885a85103e405a425b0d3529c2afae699b96932937521cfea32259->leave($__internal_34f0c34a40885a85103e405a425b0d3529c2afae699b96932937521cfea32259_prof);

        
        $__internal_3a52528d234ca3fa3b343d93bca2b761879cd5813ff7f86d12b891fc180eac5b->leave($__internal_3a52528d234ca3fa3b343d93bca2b761879cd5813ff7f86d12b891fc180eac5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
