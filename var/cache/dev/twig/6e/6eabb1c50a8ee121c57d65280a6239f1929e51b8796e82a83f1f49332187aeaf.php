<?php

/* AdminBundle:CtProcesVerbal:edit.html.twig */
class __TwigTemplate_429232781358f9634260548e29a1a0676a5f4ab58b3e7502043f6c8285ca8c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:edit.html.twig", 1);
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
        $__internal_a91d772d013466819488069045636e9f7d197abb4a6a1ddeb50a63765d8b9051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91d772d013466819488069045636e9f7d197abb4a6a1ddeb50a63765d8b9051->enter($__internal_a91d772d013466819488069045636e9f7d197abb4a6a1ddeb50a63765d8b9051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        $__internal_78530d3dbb831c1f2f9a5c490c6a98c6c4b1fc43d1d870e2838e09d0e29b7daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78530d3dbb831c1f2f9a5c490c6a98c6c4b1fc43d1d870e2838e09d0e29b7daf->enter($__internal_78530d3dbb831c1f2f9a5c490c6a98c6c4b1fc43d1d870e2838e09d0e29b7daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91d772d013466819488069045636e9f7d197abb4a6a1ddeb50a63765d8b9051->leave($__internal_a91d772d013466819488069045636e9f7d197abb4a6a1ddeb50a63765d8b9051_prof);

        
        $__internal_78530d3dbb831c1f2f9a5c490c6a98c6c4b1fc43d1d870e2838e09d0e29b7daf->leave($__internal_78530d3dbb831c1f2f9a5c490c6a98c6c4b1fc43d1d870e2838e09d0e29b7daf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28ca62080b161d3335b31ba3491de972a5dddf623995b65f0d060a18fd5cf515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ca62080b161d3335b31ba3491de972a5dddf623995b65f0d060a18fd5cf515->enter($__internal_28ca62080b161d3335b31ba3491de972a5dddf623995b65f0d060a18fd5cf515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_024c847462328185cbb04dc9d783a33f97b87a31fc9c0c846250966df3c3f42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024c847462328185cbb04dc9d783a33f97b87a31fc9c0c846250966df3c3f42a->enter($__internal_024c847462328185cbb04dc9d783a33f97b87a31fc9c0c846250966df3c3f42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_024c847462328185cbb04dc9d783a33f97b87a31fc9c0c846250966df3c3f42a->leave($__internal_024c847462328185cbb04dc9d783a33f97b87a31fc9c0c846250966df3c3f42a_prof);

        
        $__internal_28ca62080b161d3335b31ba3491de972a5dddf623995b65f0d060a18fd5cf515->leave($__internal_28ca62080b161d3335b31ba3491de972a5dddf623995b65f0d060a18fd5cf515_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1260083540e605035c5ebe0477d4fbee888f4696b0dd263767bef2b67b4b5743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1260083540e605035c5ebe0477d4fbee888f4696b0dd263767bef2b67b4b5743->enter($__internal_1260083540e605035c5ebe0477d4fbee888f4696b0dd263767bef2b67b4b5743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff693a805d4d9b90ac2b553c86d4770fb7c66f1c9ad49050711ef066dbce18ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff693a805d4d9b90ac2b553c86d4770fb7c66f1c9ad49050711ef066dbce18ef->enter($__internal_ff693a805d4d9b90ac2b553c86d4770fb7c66f1c9ad49050711ef066dbce18ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ff693a805d4d9b90ac2b553c86d4770fb7c66f1c9ad49050711ef066dbce18ef->leave($__internal_ff693a805d4d9b90ac2b553c86d4770fb7c66f1c9ad49050711ef066dbce18ef_prof);

        
        $__internal_1260083540e605035c5ebe0477d4fbee888f4696b0dd263767bef2b67b4b5743->leave($__internal_1260083540e605035c5ebe0477d4fbee888f4696b0dd263767bef2b67b4b5743_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/edit.html.twig");
    }
}
