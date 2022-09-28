<?php

/* @Admin/CtProvince/edit.html.twig */
class __TwigTemplate_3f2e72cf86730c2e62736e913631f7b9f7fda1284f9985e942a81b4f75d00c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/edit.html.twig", 1);
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
        $__internal_3d56ee12883f942a08d5589ead4453080a9de4b1065717f0253d7edf90cfef28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d56ee12883f942a08d5589ead4453080a9de4b1065717f0253d7edf90cfef28->enter($__internal_3d56ee12883f942a08d5589ead4453080a9de4b1065717f0253d7edf90cfef28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        $__internal_06f40fcafabccb577cddd97bc4243fc74dcf09f646ba5292866383d35be17d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f40fcafabccb577cddd97bc4243fc74dcf09f646ba5292866383d35be17d90->enter($__internal_06f40fcafabccb577cddd97bc4243fc74dcf09f646ba5292866383d35be17d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d56ee12883f942a08d5589ead4453080a9de4b1065717f0253d7edf90cfef28->leave($__internal_3d56ee12883f942a08d5589ead4453080a9de4b1065717f0253d7edf90cfef28_prof);

        
        $__internal_06f40fcafabccb577cddd97bc4243fc74dcf09f646ba5292866383d35be17d90->leave($__internal_06f40fcafabccb577cddd97bc4243fc74dcf09f646ba5292866383d35be17d90_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee261d0002f4a5bbaa4b0602fcab95d28c6e6efd3d9e7c288cae387b562ba816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee261d0002f4a5bbaa4b0602fcab95d28c6e6efd3d9e7c288cae387b562ba816->enter($__internal_ee261d0002f4a5bbaa4b0602fcab95d28c6e6efd3d9e7c288cae387b562ba816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95f8fc663dbe3df88c761c735f42df54e7b9749adcb3be663a78df9664d6bd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f8fc663dbe3df88c761c735f42df54e7b9749adcb3be663a78df9664d6bd12->enter($__internal_95f8fc663dbe3df88c761c735f42df54e7b9749adcb3be663a78df9664d6bd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_95f8fc663dbe3df88c761c735f42df54e7b9749adcb3be663a78df9664d6bd12->leave($__internal_95f8fc663dbe3df88c761c735f42df54e7b9749adcb3be663a78df9664d6bd12_prof);

        
        $__internal_ee261d0002f4a5bbaa4b0602fcab95d28c6e6efd3d9e7c288cae387b562ba816->leave($__internal_ee261d0002f4a5bbaa4b0602fcab95d28c6e6efd3d9e7c288cae387b562ba816_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4edd2420f10401c8772a735338ddbe6ff0177cd032aa317e54d402455aee11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4edd2420f10401c8772a735338ddbe6ff0177cd032aa317e54d402455aee11c->enter($__internal_b4edd2420f10401c8772a735338ddbe6ff0177cd032aa317e54d402455aee11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9392f6f58bbb7033cd0663f9da84226ffecfd486b10cf8adebbff9469efef277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9392f6f58bbb7033cd0663f9da84226ffecfd486b10cf8adebbff9469efef277->enter($__internal_9392f6f58bbb7033cd0663f9da84226ffecfd486b10cf8adebbff9469efef277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_9392f6f58bbb7033cd0663f9da84226ffecfd486b10cf8adebbff9469efef277->leave($__internal_9392f6f58bbb7033cd0663f9da84226ffecfd486b10cf8adebbff9469efef277_prof);

        
        $__internal_b4edd2420f10401c8772a735338ddbe6ff0177cd032aa317e54d402455aee11c->leave($__internal_b4edd2420f10401c8772a735338ddbe6ff0177cd032aa317e54d402455aee11c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProvince/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\edit.html.twig");
    }
}
