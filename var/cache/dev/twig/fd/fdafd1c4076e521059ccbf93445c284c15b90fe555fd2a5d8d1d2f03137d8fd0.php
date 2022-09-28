<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e8aa7840043b6d93b8d98a5fc7a6900673424d671d7dbda650f335c80bbaca13 extends Twig_Template
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
        $__internal_d96844b14834bbc4fb311eef8645b6eea5ceb859fe2550645a9b4677c4c5d3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96844b14834bbc4fb311eef8645b6eea5ceb859fe2550645a9b4677c4c5d3d5->enter($__internal_d96844b14834bbc4fb311eef8645b6eea5ceb859fe2550645a9b4677c4c5d3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_c153fab5199867875202e5bcb963abdfd4a6048c0249942863370ccd66453bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c153fab5199867875202e5bcb963abdfd4a6048c0249942863370ccd66453bc8->enter($__internal_c153fab5199867875202e5bcb963abdfd4a6048c0249942863370ccd66453bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d96844b14834bbc4fb311eef8645b6eea5ceb859fe2550645a9b4677c4c5d3d5->leave($__internal_d96844b14834bbc4fb311eef8645b6eea5ceb859fe2550645a9b4677c4c5d3d5_prof);

        
        $__internal_c153fab5199867875202e5bcb963abdfd4a6048c0249942863370ccd66453bc8->leave($__internal_c153fab5199867875202e5bcb963abdfd4a6048c0249942863370ccd66453bc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
