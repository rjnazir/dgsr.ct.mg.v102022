<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_923ff0effa0fa3f33a5249d1571e6adced2109f7fe717f5aa43a05b387d0cb58 extends Twig_Template
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
        $__internal_b3f71dadabc2dad73ed4bb719fb3b77ac7d4ea13167f95dc0593babe08ece36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f71dadabc2dad73ed4bb719fb3b77ac7d4ea13167f95dc0593babe08ece36f->enter($__internal_b3f71dadabc2dad73ed4bb719fb3b77ac7d4ea13167f95dc0593babe08ece36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_46578a19685e2bc8ebb225d1c2de8b0dbec80b2b2f0182431d6212c4a5abfad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46578a19685e2bc8ebb225d1c2de8b0dbec80b2b2f0182431d6212c4a5abfad3->enter($__internal_46578a19685e2bc8ebb225d1c2de8b0dbec80b2b2f0182431d6212c4a5abfad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b3f71dadabc2dad73ed4bb719fb3b77ac7d4ea13167f95dc0593babe08ece36f->leave($__internal_b3f71dadabc2dad73ed4bb719fb3b77ac7d4ea13167f95dc0593babe08ece36f_prof);

        
        $__internal_46578a19685e2bc8ebb225d1c2de8b0dbec80b2b2f0182431d6212c4a5abfad3->leave($__internal_46578a19685e2bc8ebb225d1c2de8b0dbec80b2b2f0182431d6212c4a5abfad3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
